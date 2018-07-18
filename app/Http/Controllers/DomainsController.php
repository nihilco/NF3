<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Domain;
use App\Models\Tld;

class DomainsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$domains = Domain::all();
	
	return view('domains.index', compact('domains'));
    }

    //
    public function create()
    {
	$tlds = Tld::all();
	$accounts = Account::all();
	
        return view('domains.create', compact(['tlds', 'accounts']));
    }

    //
    public function show(Domain $domain)
    {
	if(request()->expectsJson()) {
            return $domain;
	}

	return view('domains.show', compact(['domain']));
    }

    //
    public function store(Request $request)
    {
	$this->validate(request(), [
	    'tld' => 'required|exists:tlds,id',
	    'account' => 'nullable|exists:accounts,id',
	    'domain' => 'required|unique:domains,domain',
	    'registeredAt' => 'required|date',
	    'lastRenewedAt' => 'required|date',
	    'renewsAt' => 'required|date',
	    'active' => '',
	]);
	
	$domain = new Domain();

	$domain->creator_id = auth()->id();
	$domain->owner_id = auth()->id();
	$domain->tld_id = request('tld');
	if(request('account')) {
	    $domain->account = request('account');
	}
	$domain->domain = request('domain');
	$domain->registered_at = new \Carbon\Carbon(request('registeredAt'));
	$domain->last_renewed_at = new \Carbon\Carbon(request('lastRenewedAt'));
	$domain->renews_at = new \Carbon\Carbon(request('renewsAt'));
	if(request('active') == 'on') {
	    $domain->active = true;
	}else{
	    $domain->active = false;
	}	

	$domain->save();

	\Session::flash('message', 'Domain successfully created.');
	\Session::flash('alert-class', 'alert-success');	
	
	if(request()->expectsJson()) {
            return response()->json($domain, 201);
	}

	return redirect('/domains');
    }

    //
    public function edit(Domain $domain)
    {
	$tlds = Tld::all();
	$accounts = Account::all();
	
        return view('domains.edit', compact(['domain', 'tlds', 'accounts']));
    }

    //
    public function update(Request $request, Domain $domain)
    {
	$this->validate(request(), [
	    'tld' => 'required|exists:tlds,id',
	    'account' => 'nullable|exists:accounts,id',
	    'domain' => 'required|unique:domains,domain',
	    'registeredAt' => 'required|date',
	    'lastRenewedAt' => 'required|date',
	    'renewsAt' => 'required|date',
	    'active' => '',
	]);
	
	$domain->tld_id = request('tld');
	if(request('account')) {
	    $domain->account = request('account');
	}
	$domain->domain = request('domain');
	$domain->registered_at = new \Carbon\Carbon(request('registeredAt'));
	$domain->last_renewed_at = new \Carbon\Carbon(request('lastRenewedAt'));
	$domain->renews_at = new \Carbon\Carbon(request('renewsAt'));
	if(request('active') == 'on') {
	    $domain->active = true;
	}else{
	    $domain->active = false;
	}	

	$domain->save();

	\Session::flash('message', 'Domain successfully created.');
	\Session::flash('alert-class', 'alert-success');	

	if(request()->expectsJson()) {
            return response()->json($domain, 200);
	}

	return redirect($domain->path());
    }

    //
    public function destroy(Domain $domain)
    {
        $domain->delete();

	\Session::flash('message', 'Domain successfully deleted.');
	\Session::flash('alert-class', 'alert-success');	

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $domains = Domain::all();

	if(request()->expectsJson()) {
            return $domains;
	}

	return view('domains.list', compact(['domains']));
    }
}
