<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagsController extends Controller
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
	$tags = Tag::all();
	return view('tags.index', compact(['tags']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('tags.create');
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
	    'description' => 'required|string',
	]);

	$tag = new Tag();

	$tag->creator_id = auth()->id();
	$tag->owner_id = auth()->id();
	$tag->name = request('name');
	$tag->description = request('description');

	$tag->save();

	\Session::flash('message', 'Tag successfully created.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
	    return response()->json($tag, 201);
	}

	return redirect('/tags');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
	return view('tags.show', compact(['tag']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
	return view('tags.edit', compact(['tag']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
	$this->validate(request(), [
	    'name' => 'required|string',
	    'description' => 'required|string',
	]);

	$tag->name = request('name');
	$tag->description = request('description');

	$tag->save();

	\Session::flash('message', 'Tag successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
	    return response()->json($tag, 200);
	}

	return redirect($tag->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
	$tag->delete();

	\Session::flash('message', 'Tag successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $tags = Tag::all();

	return view('tags.list', compact(['tags']));
    }
}
