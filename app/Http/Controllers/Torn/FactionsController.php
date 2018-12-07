<?php

namespace App\Http\Controllers\Torn;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Torn\Faction;

class FactionsController extends Controller
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
	$factions = Faction::paginate(25);
	return view('torn.factions.index', compact(['factions']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('torn.factions.create');
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

        $faction = new Faction();

	$faction->creator_id = auth()->id();
	$faction->owner_id = auth()->id();

	$faction->save();

	\Session::flash('message', 'Faction successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($faction, 201);
	}

	return redirect('/torn/factions');	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faction  $faction
     * @return \Illuminate\Http\Response
     */
    public function show(Faction $faction)
    {
        //
	if(request()->expectsJson()) {
            return $faction;
	}

	return view('torn.factions.show', compact(['faction']));	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faction  $faction
     * @return \Illuminate\Http\Response
     */
    public function edit(Faction $faction)
    {
        //
	return view('torn.factions.edit', compact(['faction']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faction  $faction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faction $faction)
    {
        //
        //
        $this->validate(request(), [

	]);

	//

	$faction->save();

	\Session::flash('message', 'Faction successfully updated.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($faction, 200);
	}

	return redirect($faction->path());		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faction  $faction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faction $faction)
    {
        //
        $faction->delete();

	\Session::flash('message', 'Faction successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();	
    }

    //
    public function list()
    {
        $factions = Faction::all();

	if(request()->expectsJson()) {
            return $factions;
	}

	return view('torn.factions.list', compact(['factions']));
    }
}
