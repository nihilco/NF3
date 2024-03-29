<?php

namespace App\Http\Controllers\Torn;

use App\Models\Torn\Networth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NetworthsController extends Controller
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
	$networths = Networth::paginate(25);
	return view('torn.networths.index', compact(['networths']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('torn.networths.create');
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

        $networth = new Networth();

	$networth->creator_id = auth()->id();
	$networth->owner_id = auth()->id();

	$networth->save();

	\Session::flash('message', 'Networth successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($networth, 201);
	}

	return redirect('/torn/networths');
	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Networth  $networth
     * @return \Illuminate\Http\Response
     */
    public function show(Networth $networth)
    {
        //
	if(request()->expectsJson()) {
            return $networth;
	}

	return view('torn.networths.show', compact(['networth']));	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Networth  $networth
     * @return \Illuminate\Http\Response
     */
    public function edit(Networth $networth)
    {
        //
	return view('networths.edit', compact(['networth']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Networth  $networth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Networth $networth)
    {
        //
        $this->validate(request(), [

	]);

	//

	$networth->save();

	\Session::flash('message', 'Networth successfully updated.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($networth, 200);
	}

	return redirect($networth->path());	
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Networth  $networth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Networth $networth)
    {
        //
        $networth->delete();

	\Session::flash('message', 'Networth successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();	
    }

    //
    public function list()
    {
        $networths = Networth::all();

	if(request()->expectsJson()) {
            return $networths;
	}

	return view('torn.networths.list', compact(['networths']));
    }

}
