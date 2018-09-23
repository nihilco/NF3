<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;

class NamesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$names = Name::all();
	return view('names.index', compact('names'));
    }

    //
    public function create()
    {
	return view('names.create');
    }

    //
    public function show(Name $name)
    {
	//
	if(request()->expectsJson()) {
            return $name;
	}

	return view('names.show', compact(['name']));
    }

    //
    public function store(Request $request)
    {
	//
        $this->validate(request(), [

	]);

        $name = new Name();

	$name->creator_id = auth()->id();
	$name->owner_id = auth()->id();

	$name->save();

	\Session::flash('message', 'Name successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($name, 201);
	}

	return redirect('/names');
    }

    //
    public function edit(Name $name)
    {
        return view('names.edit', compact(['name']));
    }

    //
    public function update(Request $request, Name $name)
    {
        $this->validate(request(), [

	]);

	//

	$name->save();

	\Session::flash('message', 'Name successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($name, 200);
	}

	return redirect($name->path());
    }

    //
    public function destroy(Name $name)
    {
	//
        $name->delete();

	\Session::flash('message', 'Name successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $names = Name::all();

	if(request()->expectsJson()) {
            return $names;
	}

	return view('names.list', compact(['names']));
    }    
}
