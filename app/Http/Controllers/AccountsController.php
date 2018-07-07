<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APp\Models\Account;

class AccountsController extends Controller
{
    //
    public function index()
    {
	return view('accounts.index');
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
        $account = Account::create($request->all());
	
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
        $account->update($request->all());

	if(request()->expectsJson()) {
            return response()->json($account, 200);
	}

	return back();
    }

    //
    public function delete(Account $account)
    {
        $account->delete();

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
