<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Contact;
use App\Models\Organization;
use App\Models\User;
use App\Models\Name;
use App\Models\Participant;
use Illuminate\Http\Request;

class RepresentativesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['thisyear', 'lastyear', 'create', 'store']);
    }

    //
    public function index()
    {
	$contacts = Contact::join('names', 'contacts.name_id', '=', 'names.id')->where('website_id', config('app.website')->id)->orderBy('names.last')->paginate(25);
	return view('representatives.index', compact(['contacts']));
    }

    //
    public function thisyear()
    {
	//
	$event = Event::find(4);

	//
	return view('representatives.thisyear', compact(['event']));
    }

    //
    public function lastyear()
    {
	//
	$event = Event::find(3);

	//
	return view('representatives.lastyear', compact(['event']));
    }

    //
    public function create()
    {
	//session()->forget(['step', 'organization', 'representative', 'invoice', 'payment', 'additional', 'scanner']);

        if(session('step') == 2) {
    	    $organizations = Organization::where('website_id', config('app.website')->id)->orderBy('name_alpha')->get();
	    return view('representatives.org', compact(['organizations']));
	}

        if(session('step') == 3) {
	    //dd(request());
	    return view('representatives.rep');
	}

        if(session('step') == 4) {
	    //dd(request());
	    return view('representatives.pay');
	}

        if(session('step') == 5) {
	    //dd(request());
    	    $org = Organization::find(session('organization'));
	    $rep = User::find(session('representative'));

	    $total = 160;

	    $total += session('additional') * 25;

	    if(session('scanner') == 'yes') {
	        $total += 80;
	    }

	    return view('representatives.confirm', compact(['org', 'rep', 'total']));
	}

	session(['step' => 1]);
        return view('representatives.create');    
    }

    //
    public function store()
    {
        if(session('step') == 1)
	{
	    $organizations = Organization::where('website_id', config('app.website')->id)->orderBy('name_alpha')->get();
	    
      	    session(['step' => 2]);
	    return view('representatives.org', compact(['organizations']));
	}

        if(session('step') == 2)
	{
	    if(request('organization') > 0) {
	        $this->validate(request(), [
		    'organization' => 'required|exists:organizations,id',
		]);

		$organization = Organization::find(request('organization'));
		
	    } elseif(request('name') || request('website')) {

	        $this->validate(request(), [
		    'name' => 'required|unique:organizations,name_display',
		    'website' => 'required',
		]);

		$organization = new Organization();

		$organization->creator_id = 1;
		$organization->owner_id = 1;
		$organization->website_id = (config('app.website')) ? config('app.website')->id : 1;
		$organization->name_display = request('name');
		$organization->website = request('website');

		$organization->save();

	    } else {
	    
	        $this->validate(request(), [
		    'organization' => 'required',
		    'name' => 'required',
		    'website' => 'required',
		]);
	    }

	    session([
	        'step' => 3,
		'organization' => $organization->id,
	    ]);
	    
	    return view('representatives.rep', compact(['$organization']));
	}

        if(session('step') == 3)
	{
	    $this->validate(request(), [
	        'first' => 'required|string',
		'last' => 'required|string',
		'email' => 'required|email',
		'additional' => 'required|integer|min:0|max:4',
		'scanner' => 'required|in:no,yes',
	    ]);

	    $user = User::where('email', request('email'))->first();

	    if(!$user) {
	        $name = factory(Name::class)->create([
		    'first' => request('first'),
		    'last' => request('last'),
		]);

		$contact = factory(Contact::class)->create([
		    'name_id' => $name->id,
		]);

		$contact->organizations()->save(Organization::find(session('organization')));

	        $user = factory(User::class)->create([
		    'contact_id' => $contact->id,
		    'username' => request('email'),
		    'email' => request('email'),
		]);
	    }

	    if(!$user->contact->defaultOrganization) {
	        $user->contact->organizations()->save(Organization::find(session('organization')));
	    }

	    session([
	        'step' => 4,
		'representative' => $user->id,
		'additional' => request('additional'),
		'scanner' => request('scanner'),
	    ]);
	    
	    return view('representatives.pay');
	}

        if(session('step') == 4)
	{
	    if(request('mail') == 'yes') {
	    
	    } else {
	        $this->validate(request(), [
	            'stripeToken' => 'required',
	        ]);	    
	    }

	    session([
	        'step' => 5,
		'payment' => request('stripeToken'),
	    ]);

	    $org = Organization::find(session('organization'));
	    $rep = User::find(session('representative'));

	    $total = 160;

	    $total += session('additional') * 25;

	    if(session('scanner') == 'yes') {
	        $total += 80;
	    }

	    return view('representatives.confirm', compact(['org', 'rep', 'total']));
	}

        if(session('step') == 5)
	{
	    //
	    $total = 160;

	    $total += session('additional') * 25;

	    if(session('scanner') == 'yes') {
	        $total += 80;
	    }

	    $org = Organization::find(session('organization'));
	    $rep = User::find(session('representative'));

	    $fee = floor((10 - (($total * .029) + 0.3)) * 100);

	    //
	    // Set your secret key: remember to change this to your live secret key in production
	    // See your keys here: https://dashboard.stripe.com/account/apikeys
	    //\Stripe\Stripe::setApiKey(env('STRIPE_PLATFORM_TEST_SECRET'));
	    \Stripe\Stripe::setApiKey(config('services.stripe.keys.' . config('services.stripe.mode') . '.secret'));

	    // Token is created using Checkout or Elements!
	    // Get the payment token ID submitted by the form:
	    $charge = \Stripe\Charge::create([
	        'amount' => $total * 100,
		'currency' => 'usd',
	        'description' => 'Coast-to-Coast College Fair Registration',
		'application_fee' => ($fee > 0) ? $fee : 0,
	        'source' => session('payment'),
		'metadata' => [
		    'organization' => $org->name_display . ' [' . $org->id . ']',
		    'representative' => $rep->contact->name->fullName . ' (' . $rep->email . ')',
		    'additional' => session('additional'),
		    'scanner' => session('scanner'),
		],
	    ], ["stripe_account" => "acct_17QhV9DdmwKxmYbz"]);

	    //
	    $event = Event::where('name', 'Fair 2019')->first();

            factory(Participant::class)->create([
    	        'owner_id' => session('representative'),
		'event_id' => $event->id,
	    ]);        	

	    // Email receipt and notify Anne
	    \Mail::to([$rep->email, $event->owner->email])
                ->send(new \App\Mail\Fair\Registered($event, $rep, $charge, session('additional'), session('scanner')));	    

	    //
	    session()->forget(['step', 'organization', 'representative', 'invoice', 'payment', 'additional', 'scanner']);

	    //
  	    \Session::flash('message', 'Registration successful.');
	    \Session::flash('alert-class', 'alert-success');

	    return redirect('/representatives/this-year');
	}

    }
}
