3<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\County;

class CountiesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$countries = County::all();
	return view('counties.index', compact('counties'));
    }

    //
    public function create()
    {
	return view('counties.create');
    }

    //
    public function show(County $county)
    {
	//
	if(request()->expectsJson()) {
            return $county;
	}

	return view('counties.show', compact(['county']));
    }

    //
    public function store(Request $request)
    {
	//
        $this->validate(request(), [
	    'country' => 'required|exists:countries,id',
	    'province' => 'required|exists:provinces,id',
	    'code' => 'required|string|size:2',
	    'name' => 'required|string',
	    'description' => 'required',
	]);

        $county = new County();

	$county->creator_id = auth()->id();
	$county->owner_id = auth()->id();
	$county->country_id = request('country');
	$county->province_id = request('province');
	$county->code = request('code');
	$county->name = request('name');
	$county->description = request('description');

	$county->save();

	\Session::flash('message', 'County successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($county, 201);
	}

	return redirect('/counties');
    }

    //
    public function edit(County $county)
    {
        return view('counties.edit', compact(['county']));
    }

    //
    public function update(Request $request, County $county)
    {
        $this->validate(request(), [
	    'country' => 'required|exists:countries,id',
	    'province' => 'required|exists:provinces,id',	
	    'code' => 'required|string|size:2',
	    'name' => 'required|string',
	    'description' => 'required|string',
	]);

	$county->country_id = request('country');
	$county->province_id = request('province');
	$county->code = request('code');
	$county->name = request('name');
	$county->description = request('description');

	$county->save();

	\Session::flash('message', 'County successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($county, 200);
	}

	return redirect($county->path());
    }

    //
    public function destroy(County $county)
    {
	//
        $county->delete();

	\Session::flash('message', 'County successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $counties = County::all();

	if(request()->expectsJson()) {
            return $counties;
	}

	return view('counties.list', compact(['counties']));
    }
}
