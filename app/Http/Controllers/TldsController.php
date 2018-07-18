<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tld;

class TldsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
        $tlds = Tld::all();
	return view('tlds.index', compact('tlds'));
    }

    //
    public function create()
    {
        return view('tlds.create');
    }

    //
    public function show(Tld $tld)
    {
	if(request()->expectsJson()) {
            return $tld;
	}

	return view('tlds.show', compact(['tld']));
    }

    //
    public function store(Request $request)
    {
        $this->validate(request(), [
	    'name' => 'required',
	    'domain' => 'required|unique:tlds,domain',
	    'description' => 'required',
	]);

	$tld = new Tld();

	$tld->creator_id = auth()->id();
	$tld->owner_id = auth()->id();
	$tld->name = request('name');
	$tld->domain = request('domain');
	$tld->description = request('description');

	$tld->save();

	\Session::flash('message', 'TLD successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($tld, 201);
	}

	return redirect('/tlds');
    }

    //
    public function edit(Tld $tld)
    {
        return view('tlds.edit', compact(['tld']));
    }

    //
    public function update(Request $request, Tld $tld)
    {
        $this->validate(request(), [
	    'name' => 'required',
	    'domain' => 'required|unique:tlds,domain,' . $tld->id,
	    'description' => 'required',
	]);

	$tld->name = request('name');
	$tld->domain = request('domain');
	$tld->description = request('description');

	$tld->save();

	\Session::flash('message', 'TLD successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($tld, 200);
	}

	return redirect($tld->path());
    }

    //
    public function destroy(Tld $tld)
    {
        $tld->delete();

	\Session::flash('message', 'TLD successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $tlds = Tld::all();

	if(request()->expectsJson()) {
            return $tlds;
	}

	return view('tlds.list', compact(['tlds']));
    }
}
