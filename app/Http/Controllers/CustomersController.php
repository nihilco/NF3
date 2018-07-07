<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    //
    public function index()
    {
	return view('customers.index');
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
        $customer = Customer::create($request->all());
	
	if(request()->expectsJson()) {
            return response()->json($customer, 201);
	}

	return back();
    }

    //
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact(['customer']));
    }

    //
    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());

	if(request()->expectsJson()) {
            return response()->json($customer, 200);
	}

	return back();
    }

    //
    public function delete(Customer $customer)
    {
        $customer->delete();

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
