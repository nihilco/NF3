<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$accounts = Account::all();

	return view('accounts.index', compact(['accounts']));
    }

    //
    public function create()
    {
	return view('accounts.create');
    }

    //
    public function show(Account $account)
    {
	if(request()->expectsJson()) {
            return $account;
	}

	return view('accounts.show', compact(['account']));
    }

    //
    public function store(Request $request)
    {
        $this->validate(request(), [
	    'type' => 'required|in:test,live',
	    'name' => 'required',
	    'description' => 'required',
	    'stripeId' => '',
	    'publishableKey' => 'required_with:stripeId',
	    'secretKey' => 'required_with:stripeId',
	    'active' => '',
	]);

	$account = new Account();

	$account->creator_id = auth()->id();
	$account->owner_id = auth()->id();
	$account->type = request('type');
	$account->name = request('name');
	$account->description = request('description');
	$account->stripe_id = request('stripeId');
	$account->publishable_key = request('publishableKey');
	$account->secret_key = encrypt(request('secretKey'));
	if(request('active') == 'on') {
	    $account->active = true;
	}else{
	    $account->active = false;
	}

	$account->save();

	\Session::flash('message', 'Account successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($account, 201);
	}

	return back();
    }

    //
    public function edit(Account $account)
    {
        return view('accounts.edit', compact(['account']));
    }

    //
    public function update(Request $request, Account $account)
    {
        $this->validate(request(), [
	    'type' => 'required|in:test,live',
	    'name' => 'required',
	    'description' => 'required',
	    'stripeId' => 'required',
	    'publishableKey' => 'required',
	    'secretKey' => 'required',
	    'active' => '',
	]);

	$account->type = request('type');
	$account->name = request('name');
	$account->description = request('description');
	$account->stripe_id = request('stripeId');
	$account->publishable_key = request('publishableKey');
	$account->secret_key = encrypt(request('secretKey'));
	if(request('active') == 'on') {
	    $account->active = true;
	}else {
	    $account->active = false;
	}

	$account->save();

	\Session::flash('message', 'Account successfully updated.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($account, 200);
	}

	return redirect($account->path());
    }

    //
    public function destroy(Account $account)
    {
        $account->delete();

	\Session::flash('message', 'Account successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $accounts = Account::all();

	if(request()->expectsJson()) {
            return $accounts;
	}

	return view('accounts.list', compact(['accounts']));
    }
}
