<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
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
	$posts = Post::all();
	return view('posts.index', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('posts.create');
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

        $post = new Post();

	$post->creator_id = auth()->id();
	$post->owner_id = auth()->id();
	$post->name = request('name');
	$post->slug = request('slug');	
	$post->description = request('description');
	$post->content = request('content');

	$post->save();

	\Session::flash('message', 'Post successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($post, 201);
	}

	return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
	if(request()->expectsJson()) {
            return $post;
	}

	return view('posts.show', compact(['post']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
	return view('post.eidt', compact(['post']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $this->validate(request(), [
	    'name' => 'required|string',
	    'slug' => 'required|string',
	    'description' => 'required',
	    'content' => 'required',
	]);

	$post->name = request('name');
	$post->slug = request('slug');	
	$post->description = request('description');
	$post->content = request('content');

	$post->save();

	\Session::flash('message', 'Post successfully updated.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($post, 201);
	}

	return redirect($post->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

	\Session::flash('message', 'Post successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $posts = Post::all();

	if(request()->expectsJson()) {
            return $posts;
	}

	return view('posts.list', compact(['posts']));
    }
}
