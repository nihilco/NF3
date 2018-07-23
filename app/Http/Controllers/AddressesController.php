<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Country;
use App\Models\Province;

class AddressesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$addresses = Address::all();
	return view('addresses.index', compact('addresses'));
    }

    //
    public function create()
    {
	$countries = Country::all();
	$provinces = Province::all();
	return view('addresses.create', compact(['provinces', 'countries']));
    }

    //
    public function show(Address $address)
    {
	if(request()->expectsJson()) {
            return $address;
	}

	return view('addresses.show', compact(['address']));
    }

    //
    public function store(Request $request)
    {
        $this->validate(request(), [
	    'name' => 'required|string',
	    'address1' => 'required',
	    'address2' => 'nullable',
	    'address3' => 'nullable',
	    'city' => 'required|string',
	    'province' => 'required|exists:provinces,id',
	    'postalCode' => 'required|size:5',
	    'country' => 'required|exists:countries,id',
	]);

        $address = new Address();

	$address->creator_id = auth()->id();
	$address->owner_id = auth()->id();
	$address->name = request('name');
	$address->address1 = request('address1');
	$address->city = request('city');
	$address->postal_code = request('postalCode');
	$address->province_id = request('province');
	$address->country_id = request('country');
	if(request('address2') && request('address2') != '') {
	    $address->address2 = request('address2');
	}
	if(request('address3') && request('address3') != '') {
	    $address->address3 = request('address3');
	}

	$address->save();

	\Session::flash('message', 'Address successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($address, 201);
	}

	return redirect('/addresses');
    }

    //
    public function edit(Address $address)
    {
    	$countries = Country::all();
	$provinces = Province::all();
        return view('addresses.edit', compact(['address', 'provinces', 'countries']));
    }

    //
    public function update(Request $request, Address $address)
    {
        $this->validate(request(), [
	    'name' => 'required|string',
	    'address1' => 'required',
	    'address2' => 'nullable',
	    'address3' => 'nullable',
	    'city' => 'required|string',
	    'province' => 'required|exists:provinces,id',
	    'postalCode' => 'required|size:5',
	    'country' => 'required|exists:countries,id',
	]);

	$address->name = request('name');
	$address->address1 = request('address1');
	$address->city = request('city');
	$address->postal_code = request('postalCode');
	$address->province_id = request('province');
	$address->country_id = request('country');
        $address->address2 = request('address2');
	$address->address3 = request('address3');

	$address->save();

	\Session::flash('message', 'Address successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($address, 200);
	}

	return redirect($address->path());
    }

    //
    public function destroy(Address $address)
    {
        $address->delete();

	\Session::flash('message', 'Address successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $addresses = Address::all();

	if(request()->expectsJson()) {
            return $addresses;
	}

	return view('addresses.list', compact(['addresses']));
    }
}
