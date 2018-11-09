<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
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
	$participants = Participant::all();
	return view('participants.index', compact(['participants']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	$organizations = Organization::all();

	return view('participants.create', compact(['organizations']));
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

        $participant = new Participant();

	$participant->creator_id = auth()->id();
	$participant->owner_id = auth()->id();

	$participant->save();

	\Session::flash('message', 'Participant successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($participant, 201);
	}

	return redirect('/participants');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function show(Participant $participant)
    {
        //
	return view('participants.show', compact(['participant']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
	return view('participant.edit', compact(['participant']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participant)
    {
        $this->validate(request(), [

	]);

	//

	$participant->save();

	\Session::flash('message', 'Participant successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($participant, 200);
	}

	return redirect($participant->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
	//
        $participant->delete();

	\Session::flash('message', 'Participant successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();        
    }

    //
    public function list()
    {
	$participants = Participant::all();

	if(request()->expectsJson()) {
	    return $participants;
	}

        //
	return view('participant.list', compact(['participants']));
    }
}
