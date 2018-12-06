<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinksController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$links = Link::all();
	return view('links.index', compact('links'));
    }

    //
    public function create()
    {
	return view('links.create');
    }

    //
    public function show(Link $link)
    {
	if(request()->expectsJson()) {
            return $link;
	}

	return view('links.show', compact(['link']));
    }

    //
    public function store(Request $request)
    {
        $this->validate(request(), [
	    'slug' => 'required|string',
	    'url' => 'required|string',
	    'name' => 'required|string',
	    'description' => 'required|string',
	    'expires_count' => 'integer|min:1|nullable',
	    'expires_at' => 'date|nullable',
	]);

        $link = new Link();

	$link->creator_id = auth()->id();
	$link->owner_id = auth()->id();	
	$link->slug = request('slug');
	$link->url = request('url');
	$link->name = request('name');
	$link->description = request('description');
	$link->expires_count = request('expires_count');
	$link->expires_at = request('expires_at');

	$link->save();

	\Session::flash('message', 'Link successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($link, 201);
	}

	return redirect('/links');
    }

    //
    public function edit(Link $link)
    {
        return view('links.edit', compact(['link']));
    }

    //
    public function update(Request $request, Link $link)
    {
        $this->validate(request(), [
    	    'slug' => 'required|string',
	    'url' => 'required|string',
	    'name' => 'required|string',
	    'description' => 'required|string',
	    'expires_count' => 'integer|min:1|nullable',
	    'expires_at' => 'date|nullable',
	]);

	$link->slug = request('slug');
	$link->url = request('url');
	$link->name = request('name');
	$link->description = request('description');
	$link->expires_count = request('expires_count');
	$link->expires_at = request('expires_at');

	$link->save();

	\Session::flash('message', 'Link successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($link, 200);
	}

	return redirect($link->path());
    }

    //
    public function destroy(Link $link)
    {
        $link->delete();

	\Session::flash('message', 'Link successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $links = Link::all();

	if(request()->expectsJson()) {
            return $links;
	}

	return view('links.list', compact(['links']));
    }
}
