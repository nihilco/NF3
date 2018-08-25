<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\View;

class ViewsController extends Controller
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
	$views = View::all();
	return view('views.index', compact(['views']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('views.create');
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

	]);

        $view = new View();

	$view->creator_id = auth()->id();
	$view->owner_id = auth()->id();

	$view->save();

	\Session::flash('message', 'View successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($view, 201);
	}

	return redirect('/views');	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\View  $view
     * @return \Illuminate\Http\Response
     */
    public function show(View $view)
    {
        //
	if(request()->expectsJson()) {
	     return $view;
	}

	return view('views.show', compact(['view']))
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\View  $view
     * @return \Illuminate\Http\Response
     */
    public function edit(View $view)
    {
        //
	return view('views.edit', compact(['view']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\View  $view
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, View $view)
    {
        //
        $this->validate(request(), [

	]);

	//

	$view->save();

	\Session::flash('message', 'View successfully updated.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($view, 200);
	}

	return redirect($view->path());		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\View  $view
     * @return \Illuminate\Http\Response
     */
    public function destroy(View $view)
    {
        //
        $view->delete();

	\Session::flash('message', 'View successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();	
    }

    //
    public function list()
    {
        $views = View::all();

	if(request()->expectsJson()) {
            return $views;
	}

	return view('views.list', compact(['views']));
    }    
}
