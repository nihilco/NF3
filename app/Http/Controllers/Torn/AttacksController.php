<?php

namespace App\Http\Controllers\Torn;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Torn\Attack;

class AttacksController extends Controller
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
	$attacks = Attack::paginate(25);
	return view('torn.attacks.index', compact(['attacks']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('torn.attacks.create');
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

        $attack = new Attack();

	$attack->creator_id = auth()->id();
	$attack->owner_id = auth()->id();

	$attack->save();

	\Session::flash('message', 'Attack successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($attack, 201);
	}

	return redirect('/torn/attacks');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attack  $attack
     * @return \Illuminate\Http\Response
     */
    public function show(Attack $attack)
    {
        //
	if(request()->expectsJson()) {
	     return $attack;
	}

	return view('torn.attacks.show', compact(['attack']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attack  $attack
     * @return \Illuminate\Http\Response
     */
    public function edit(Attack $attack)
    {
        //
	return view('torn.attacks.edit', compact(['attack']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attack  $attack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attack $attack)
    {
	//
        $this->validate(request(), [

	]);

	//

	$attack->save();

	\Session::flash('message', 'Attack successfully updated.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($attack, 200);
	}

	return redirect($attack->path());        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attack  $attack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attack $attack)
    {
        //
        $attack->delete();

	\Session::flash('message', 'Attack successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $attacks = Attack::all();

	if(request()->expectsJson()) {
            return $attacks;
	}

	return view('torn.attacks.list', compact(['attacks']));
    }
}
