<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
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
	$contacts = Contact::all();
	return view('contacts.index', compact(['contacts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('contacts.create');
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

        $contact = new Contact();

	$contact->creator_id = auth()->id();
	$contact->owner_id = auth()->id();

	$contact->save();

	\Session::flash('message', 'Contact successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($contact, 201);
	}

	return redirect('/contacts');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
	//
	if(request()->expectsJson()) {
            return $contact;
	}

	return view('contacts.show', compact(['contact']));	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
        return view('contacts.edit', compact(['contact']));	
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $this->validate(request(), [

	]);

	//

	$contact->save();

	\Session::flash('message', 'Contact successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($contact, 200);
	}

	return redirect($contact->path());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
        $contact->delete();

	\Session::flash('message', 'Contact successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();	
    }

    //
    public function list()
    {
        $contacts = Contact::all();

	if(request()->expectsJson()) {
            return $contacts;
	}

	return view('contacts.list', compact(['contacts']));
    }
}
