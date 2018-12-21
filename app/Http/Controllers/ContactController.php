<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;
use App\Models\Type;

class ContactController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['create', 'store']);
    }

    //
    public function create()
    {
	return view('contact.create');
    }

    //
    public function store(Request $request)
    {

	//
        $this->validate(request(), [
	    'name' => 'required|string',
	    'email' => 'required|email',
	    'phone' => 'required',
	    'message' => 'required',
	]);

	$types = Type::all();
	$typeTypes = $types->where('grouping', Issue::class . ':Type');
	$statusTypes = $types->where('grouping', Issue::class . ':Status');
	$priorityTypes = $types->where('grouping', Issue::class . ':Priority');
	$resolutionTypes = $types->where('grouping', Issue::class . ':Resolution');

	//
	//
	//
	$names = explode(" ", request('name'));
	
        //
	$name = new Name();

	$c = count($names);
	
	
	if($c ==1) {
	
	    $name->first = $names[0];
	    $name->nickname = $names[0];
	    
	} elseif($c == 2) {

	    $name->first = $names[0];
	    $name->nickname = $names[0];
	    $name->last = $names[1];

	}elseif($c >= 3) {

	    $name->first = $names[0];
	    $name->nickname = $names[0];
	    $name->middle = $names[1];
	    $name->last = $names[2];

	}

	$name->creator_id = 1;
	$name->owner_id = 1;
	
	$name->save();

	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $name->id,
	    'website_id' => config('app.website')->id ?? 1,
	    'creator_id' => 1,
	    'owner_id' => 1,
	]);

	$emailParts = explode('@', request('email'));

	$user = factory(App\Models\User::class)->create([
	    'contact' => $contact->id,
	    'slug' => $emailParts[0],
	    'email' => request('email'),
	]);

        $issue = new Issue();

	$issue->creator_id = $user->id;
	$issue->owner_id = $user->id;
	$issue->website_id = config('app.website')->id ?? 1;
	$issue->subject = request('name') . ' Contacted You';
	$issue->slug = 'contacted-you';
	$issue->content = request('message');
	$issue->type_id = $typeTypes->where('name', 'Claim')->first()->id;
	$issue->status_type_id = $statusTypes->where('name', 'New')->first()->id;
	$issue->priority_type_id = $priorityTypes->where('name', 'Medium')->first()->id;
	$issue->resolution_type_id = $resolutionTypes->where('name', 'Unresolved')->first()->id;

	$issue->save();

        \Mail::to([$user->email, 'contact@' . config('app.website')->domain->domain])
                ->send(new \App\Mail\Contact($issue));	    


	\Session::flash('message', 'Message successfully delivered.  We will get back to you shortly.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json(null, 201);
	}

	return redirect('/contact');
    }

    public function show(Issue $issue)
    {
	//
	if(request()->expectsJson()) {
            return $country;
	}

	return view('contact.show', compact(['issue']));    
    }

    public function list()
    {
        $issues = Issue::where('website_id', config('app.website')->id)->get();

	if(request()->expectsJson()) {
            return $issues;
	}

	return view('contact.list', compact(['issues']));    
    }
}
