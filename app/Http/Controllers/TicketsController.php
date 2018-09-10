<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class TicketsController extends Controller
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
	$tickets = Ticket::all();
	return view('tickets.index', compact(['tickets']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	$types = Type::all();
	$users = User::all();

	return view('tickets.create', compact(['types', 'users']));
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
	    'type' => 'required',
	    'status' => 'required',
	    'priority' => 'required',
	    'resolution' => 'required',
	    'subject' => 'required',
	    'slug' => 'required',
	    'assignee' => '',
	    'content' => 'required',
	]);

        $ticket = new Ticket();

	$ticket->creator_id = auth()->id();
	$ticket->owner_id = auth()->id();

	$ticket->save();

	\Session::flash('message', 'Ticket successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($ticket, 201);
	}

	return redirect('/tickets');	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
	if(request()->expectsJson()) {
            return $ticket;
	}

	return view('tickets.show', compact(['ticket']));	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
	$types = Type::all();
	$users = User::all();

        //
	return view('tickets.edit', compact(['ticket', 'types', 'users']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
        $this->validate(request(), [
	    'type' => 'required',
	    'status' => 'required',
	    'priority' => 'required',
	    'resolution' => 'required',
	    'subject' => 'required',
	    'slug' => 'required',
	    'assignee' => '',
	    'content' => 'required',
	]);

	//

	$ticket->save();

	\Session::flash('message', 'Ticket successfully edited.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($ticket, 200);
	}

	return redirect($ticket->path());	        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
        $ticket->delete();

	\Session::flash('message', 'Ticket successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();	
    }

    //
    public function list()
    {
        $tickets = Ticket::all();

	if(request()->expectsJson()) {
            return $tickets;
	}

	return view('tickets.list', compact(['tickets']));
    }
}
