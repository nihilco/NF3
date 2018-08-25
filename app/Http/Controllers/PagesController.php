<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$pages = Page::all();
	return view('pages.index', compact(['pages']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
	$this->validate(request(), [
	     'name' => 'required|string',
	     'slug' => 'required|string',
	     'description' => 'required',
	     'content' => 'required',
	]);

	$page = new Page();

	$page->creator_id = auth()->id();
	$page->owner_id = auth()->id();
	$page->name = request('name');
	$page->slug = request('slug');
	$page->description = request('description');
	$page->content = request('content');

	$page->save();

	\Session::flash('message', 'Page successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($page, 201);
	}

	return redirect('/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
	if(request()->expectsJson()) {
	    return $page;
	}

	return view('page.show', compact(['page']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
	return view('pages.edit', compact(['page']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
	//
	$this->validate(request(), [
	     'name' => 'required|string',
	     'slug' => 'required|string',
	     'description' => 'required',
	     'content' => 'required',
	]);

	$page->name = request('name');
	$page->slug = request('slug');
	$page->description = request('description');
	$page->content = request('content');

	$page->save();

	\Session::flash('message', 'Page successfully updated.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($page, 200);
	}

	return redirect($page->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
        $page->delete();

	\Session::flash('message', 'Page successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $pages = Page::all();

	if(request()->expectsJson()) {
            return $pages;
	}

	return view('pages.list', compact(['pages']));
    }
}
