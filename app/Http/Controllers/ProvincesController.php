<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Province;

class ProvincesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$provinces = Province::all();
	return view('provinces.index', compact('provinces'));
    }

    //
    public function create()
    {
	$countries = Country::all();
	return view('provinces.create', compact('countries'));
    }

    //
    public function show(Province $province)
    {
	if(request()->expectsJson()) {
            return $province;
	}

	return view('provinces.show', compact(['province']));
    }

    //
    public function store(Request $request)
    {
        $this->validate(request(), [
	    'country' => 'required|exists:countries,id',	
	    'code' => 'required|string|size:2',
	    'name' => 'required|string',
	    'description' => 'required|string',
	]);

        $province = new Province();

	$province->creator_id = auth()->id();
	$province->owner_id = auth()->id();	
	$province->country_id = request('country');
	$province->code = request('code');
	$province->name = request('name');
	$province->description = request('description');

	$province->save();

	\Session::flash('message', 'Province successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($province, 201);
	}

	return redirect('/provinces');
    }

    //
    public function edit(Province $province)
    {
	$countries = Country::all();
        return view('provinces.edit', compact(['province', 'countries']));
    }

    //
    public function update(Request $request, Province $province)
    {
        $this->validate(request(), [
	    'country' => 'required|exists:countries,id',	
	    'code' => 'required|string|size:2',
	    'name' => 'required|string',
	    'description' => 'required|string',
	]);

	$province->country_id = request('country');
	$province->code = request('code');
	$province->name = request('name');
	$province->description = request('description');

	$province->save();

	\Session::flash('message', 'Province successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($province, 200);
	}

	return redirect($province->path());
    }

    //
    public function destroy(Province $province)
    {
        $province->delete();

	\Session::flash('message', 'Province successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $provinces = Province::all();

	if(request()->expectsJson()) {
            return $provinces;
	}

	return view('provinces.list', compact(['provinces']));
    }
}
