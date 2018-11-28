<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LegalCase;

class LegalCasesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$legalCases = LegalCase::all();
	return view('legal-cases.index', compact('legalCases'));
    }

    //
    public function create()
    {
	return view('legal-cases.create');
    }

    //
    public function show(LegalCase $legalCase)
    {
	//
	if(request()->expectsJson()) {
            return $legalCase;
	}

	return view('legal-cases.show', compact(['legalCase']));
    }

    //
    public function store(Request $request)
    {
	//
        $this->validate(request(), [
	    'name' => 'required|string',
	    'description' => 'required',
	]);

        $legalCase = new LegalCase();

	$legalCase->creator_id = auth()->id();
	$legalCase->owner_id = auth()->id();
	$legalCase->name = request('name');
	$legalCase->description = request('description');

	$legalCase->save();

	\Session::flash('message', 'Legal Case successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($legalCase, 201);
	}

	return redirect('/legal-cases');
    }

    //
    public function edit(LegalCase $legalCase)
    {
        return view('legal-cases.edit', compact(['legalCase']));
    }

    //
    public function update(Request $request, LegalCase $legalCase)
    {
        $this->validate(request(), [
	    'name' => 'required|string',
	    'description' => 'required|string',
	]);

	$legalCase->name = request('name');
	$legalCase->description = request('description');

	$legalCase->save();

	\Session::flash('message', 'Legal Case successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($legalCase, 200);
	}

	return redirect($legalCase->path());
    }

    //
    public function destroy(LegalCase $legalCase)
    {
	//
        $legalCase->delete();

	\Session::flash('message', 'Legal Case successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $legalCases = LegalCase::all();

	if(request()->expectsJson()) {
            return $legalCases;
	}

	return view('legal-cases.list', compact(['legalCases']));
    }
}
