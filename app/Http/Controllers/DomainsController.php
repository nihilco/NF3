<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;

class DomainsController extends Controller
{
    //
    public function index()
    {
	return view('domains.index');
    }

    //
    public function show(Domain $domain)
    {
	if(request()->expectsJson()) {
            return $domain;
	}

	return view('domains.show', compact(['domain']));
    }

    //
    public function store(Request $request)
    {
        $domain = Domain::create($request->all());
	
	if(request()->expectsJson()) {
            return response()->json($domain, 201);
	}

	return back();
    }

    //
    public function edit(Domain $domain)
    {
        return view('domains.edit', compact(['domain']));
    }

    //
    public function update(Request $request, Domain $domain)
    {
        $domain->update($request->all());

	if(request()->expectsJson()) {
            return response()->json($domain, 200);
	}

	return back();
    }

    //
    public function delete(Domain $domain)
    {
        $domain->delete();

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $domains = Domain::all();

	if(request()->expectsJson()) {
            return $domains;
	}

	return view('domains.list', compact(['domains']));
    }
}
