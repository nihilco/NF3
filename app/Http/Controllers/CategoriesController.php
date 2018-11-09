<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$categories = Category::all();
	return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('categories.create');
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

	$category = new Category();

	$category->creator_id = auth()->id();
	$category->owner_id = auth()->id();
	$category->name = request('name');
	$category->description = request('description');

	$category->save();

	\Session::flash('message', 'Category successfully created.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
	    return response()->json($category, 201);
	}

	return redirect('/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
	if(request()->expectsJson()) {
	    return $category;
	}

	return view('categories.show', compact(['category']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
	return view('categories.edit', compact(['category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
	$this->validate(request(), [
	    'name' => 'required|string',
	    'description' => 'required|string',
	]);

	$category->name = request('name');
	$category->description = request('description');

	$category->save();

	\Session::flash('message', 'Category successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
	    return response()->json($category, 200);
	}

	return redirect($category->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
	$category->delete();

	\Session::flash('message', 'Category successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
	    return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $categories = Category::all();

	if(request()->expectsJson()) {
	    return $categories;
	}

	return view('categories.list', compact(['categories']));
    }
}
