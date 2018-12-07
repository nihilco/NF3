<?php

namespace App\Http\Controllers\Torn;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Torn\Chain;

class ChainsController extends Controller
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
	$chains = Chain::paginate(25);
	return view('torn.chains.index', compact(['chains']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('torn.chains.create');
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

        $chain = new Chain();

	$chain->creator_id = auth()->id();
	$chain->owner_id = auth()->id();

	$chain->save();

	\Session::flash('message', 'Chain successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($chain, 201);
	}

	return redirect('/torn/chains');	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chain  $chain
     * @return \Illuminate\Http\Response
     */
    public function show(Chain $chain)
    {
        //
	if(request()->expectsJson()) {
            return $chain;
	}

	return view('torn.chains.show', compact(['chain']));	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chain  $chain
     * @return \Illuminate\Http\Response
     */
    public function edit(Chain $chain)
    {
        //
	return view('torn.chains.edit', compact(['chain']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chain  $chain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chain $chain)
    {
        //
        //
        $this->validate(request(), [

	]);

	//

	$chain->save();

	\Session::flash('message', 'Chain successfully updated.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($chain, 200);
	}

	return redirect($chain->path());		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chain  $chain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chain $chain)
    {
        //
        $chain->delete();

	\Session::flash('message', 'Chain successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();	
    }

    //
    public function list()
    {
        $chains = Chain::all();

	if(request()->expectsJson()) {
            return $chains;
	}

	return view('torn.chains.list', compact(['chains']));
    }
}
