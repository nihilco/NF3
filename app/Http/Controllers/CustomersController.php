<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Customer;
use App\Models\User;

class CustomersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$customers = Customer::all();
	
	return view('customers.index', compact('customers'));
    }

    //
    public function create()
    {
	$accounts = Account::all();
	$users = User::all();
	
        return view('customers.create', compact(['accounts', 'users']));
    }

    //
    public function show(Customer $customer)
    {
	if(request()->expectsJson()) {
            return $customer;
	}

	return view('customers.show', compact(['customer']));
    }

    //
    public function store(Request $request)
    {
        $this->validate(request(), [
	    'account' => 'required|exists:accounts,id',
	    'owner' => 'required|exists:users,id',
	    'stripeId' => 'required',
	]);

	$customer = new Customer();

	$customer->creator_id = auth()->id();
	$customer->owner_id = request('owner');
        $customer->account_id = request('account');
	$customer->stripe_id = request('stripeId');

	$customer->save();

	\Session::flash('message', 'Customer successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($customer, 201);
	}

	return redirect($customer->path());
    }

    //
    public function edit(Customer $customer)
    {
	$accounts = Account::all();
	$users = User::all();

        return view('customers.edit', compact(['customer', 'accounts', 'users']));
    }

    //
    public function update(Request $request, Customer $customer)
    {
        $this->validate(request(), [
	    'account' => 'required|exists:accounts,id',
	    'owner' => 'required|exists:users,id',
	    'stripeId' => 'required',
	]);

	$customer->owner_id = request('owner');
	$customer->account_id = request('account');
	$customer->stripe_id = request('stripeId');

	$customer->save();

	\Session::flash('message', 'Customer successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($customer, 200);
	}

	return redirect($customer->path());
    }

    //
    public function destroy(Customer $customer)
    {
        $customer->delete();

	\Session::flash('message', 'Customer successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $customers = Customer::all();

	if(request()->expectsJson()) {
            return $customers;
	}

	return view('customers.list', compact(['customers']));
    }
}
