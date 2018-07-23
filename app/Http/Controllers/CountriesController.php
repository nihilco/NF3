<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountriesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$countries = Country::all();
	return view('countries.index', compact('countries'));
    }

    //
    public function create()
    {
	return view('countries.create');
    }

    //
    public function show(Country $country)
    {
	if(request()->expectsJson()) {
            return $country;
	}

	return view('countries.show', compact(['country']));
    }

    //
    public function store(Request $request)
    {
        $this->validate(request(), [
	    'code' => 'required|string|size:2',
	    'name' => 'required|string',
	    'description' => 'required',
	]);

        $country = new Country();

	$country->creator_id = auth()->id();
	$country->owner_id = auth()->id();
	$country->code = request('code');
	$country->name = request('name');
	$country->description = request('description');

	$country->save();

	\Session::flash('message', 'Country successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($country, 201);
	}

	return redirect('/countries');
    }

    //
    public function edit(Country $country)
    {
        return view('countries.edit', compact(['country']));
    }

    //
    public function update(Request $request, Country $country)
    {
        $this->validate(request(), [
	    'code' => 'required|string|size:2',
	    'name' => 'required|string',
	    'description' => 'required|string',
	]);

	$country->code = request('code');
	$country->name = request('name');
	$country->description = request('description');

	$country->save();

	\Session::flash('message', 'Country successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($country, 200);
	}

	return redirect($country->path());
    }

    //
    public function destroy(Country $country)
    {
        $country->delete();

	\Session::flash('message', 'Country successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $countries = Country::all();

	if(request()->expectsJson()) {
            return $countries;
	}

	return view('countries.list', compact(['countries']));
    }
}
