<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Domain;
use App\Models\Website;

class WebsitesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$websites = Website::all();
	
	return view('websites.index', compact(['websites']));
    }

    //
    public function create()
    {
	$accounts = Account::all();
	$domains = Domain::all();
	
	return view('websites.create', compact(['accounts', 'domains']));
    }

    //
    public function show(Website $website)
    {
	if(request()->expectsJson()) {
            return $website;
	}

	return view('websites.show', compact(['website']));
    }

    //
    public function store(Request $request)
    {
        $this->validate(request(), [
	  'domain' => 'required|exists:domains,id',
	  'account' => 'nullable|exists:accounts,id',
	  'hostname' => 'required',
	  'analyticsCode' => '',
	  'underConstruction' => '',
	  'active' => '',
	]);

	$website = new Website();

	$website->creator_id = auth()->id();
	$website->owner_id = auth()->id();
	$website->domain_id = request('domain');
	if(request('account')) {
	    $website->account_id = request('account');
	}
	$website->hostname = request('hostname');
	if(request('analyticsCode')) {
	    $website->analytics_code = request('analyticsCode');
	}
	if(request('underConstruction') == 'on') {
	    $website->under_construction = true;
	}else{
	    $website->under_construction = false;
	}
	if(request('active') == 'on') {
	    $website->active = true;
	}else{
	    $website->active = false;
	}

	$website->save();

	\Session::flash('message', 'Website successfully created.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($website, 201);
	}

	return redirect($website->path());
    }

    //
    public function edit(Website $website)
    {
    	$accounts = Account::all();
	$domains = Domain::all();

        return view('websites.edit', compact(['website', 'accounts', 'domains']));
    }

    //
    public function update(Request $request, Website $website)
    {
        $this->validate(request(), [
	  'domain' => 'required|exists:domains,id',
	  'account' => 'nullable|exists:accounts,id',
	  'hostname' => 'required',
	  'analyticsCode' => '',
	  'underConstruction' => '',
	  'active' => '',
	]);

	$website->domain_id = request('domain');
	if(request('account')) {
	    $website->account_id = request('account');
	}
	$website->hostname = request('hostname');
	if(request('analyticsCode')) {
	    $website->analytics_code = request('analyticsCode');
	}
	if(request('underConstruction') == 'on') {
	    $website->under_construction = true;
	}else{
	    $website->under_construction = false;
	}
	if(request('active') == 'on') {
	    $website->active = true;
	}else{
	    $website->active = false;
	}

	$website->save();

	\Session::flash('message', 'Website successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($website, 200);
	}

	return redirect($website->path());
    }

    //
    public function destroy(Website $website)
    {
        $website->delete();

	\Session::flash('message', 'Website successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $websites = Website::all();

	if(request()->expectsJson()) {
            return $websites;
	}

	return view('websites.list', compact(['websites']));
    }
}
