<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tld;

class TldsController extends Controller
{
    //
    public function index()
    {
	return view('tlds.index');
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
        $tld = Tld::create($request->all());
	
	if(request()->expectsJson()) {
            return response()->json($tld, 201);
	}

	return back();
    }

    //
    public function edit(Tld $tld)
    {
        return view('tlds.edit', compact(['tld']));
    }

    //
    public function update(Request $request, Tld $tld)
    {
        $tld->update($request->all());

	if(request()->expectsJson()) {
            return response()->json($tld, 200);
	}

	return back();
    }

    //
    public function delete(Tld $tld)
    {
        $tld->delete();

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
