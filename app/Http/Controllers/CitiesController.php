<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CitiesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$cities = City::all();
	return view('cities.index', compact('cities'));
    }

    //
    public function create()
    {
	return view('cities.create');
    }

    //
    public function show(City $city)
    {
	//
	if(request()->expectsJson()) {
            return $city;
	}

	return view('cities.show', compact(['city']));
    }

    //
    public function store(Request $request)
    {
	//
        $this->validate(request(), [
	    'country' => 'required|int',
	    'province' => 'required|int',
	    'name' => 'required|string',
	    'description' => 'required',
	]);

        $cityy = new City();

	$city->creator_id = auth()->id();
	$city->owner_id = auth()->id();
	$city->country_id = request('country');
	$city->province_id = request('province');
	$city->name = request('name');
	$city->description = request('description');

	$city->save();

	\Session::flash('message', 'City successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($city, 201);
	}

	return redirect('/cities');
    }

    //
    public function edit(City $city)
    {
        return view('cities.edit', compact(['city']));
    }

    //
    public function update(Request $request, City $city)
    {
        $this->validate(request(), [
	    'country' => 'required|int',
	    'province' => 'required|int',
	    'name' => 'required|string',
	    'description' => 'required|string',
	]);

	$city->country_id = request('country');
	$city->province_id = request('province');
	$city->name = request('name');
	$city->description = request('description');

	$city->save();

	\Session::flash('message', 'City successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($city, 200);
	}

	return redirect($city->path());
    }

    //
    public function destroy(City $city)
    {
	//
        $city->delete();

	\Session::flash('message', 'City successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $cities = City::all();

	if(request()->expectsJson()) {
            return $ities;
	}

	return view('cities.list', compact(['cities']));
    }
}
