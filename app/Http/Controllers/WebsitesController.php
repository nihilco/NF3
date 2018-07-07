<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;

class WebsitesController extends Controller
{
    //
    public function index()
    {
	return view('websites.index');
    }

    //
    public function show(Website $website)
    {
	if(request()->expectsJson()) {
            return $website;
	}

	return view('websites.show', compact(['website']));
    }

    //
    public function store(Request $request)
    {
        $website = Website::create($request->all());
	
	if(request()->expectsJson()) {
            return response()->json($website, 201);
	}

	return back();
    }

    //
    public function edit(Website $website)
    {
        return view('websites.edit', compact(['website']));
    }

    //
    public function update(Request $request, Website $website)
    {
        $website->update($request->all());

	if(request()->expectsJson()) {
            return response()->json($website, 200);
	}

	return back();
    }

    //
    public function delete(Website $website)
    {
        $website->delete();

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $websites = Website::all();

	if(request()->expectsJson()) {
            return $websites;
	}

	return view('websites.list', compact(['websites']));
    }
}
