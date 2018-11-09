<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class IssuesController extends Controller
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
	$issues = Issue::all();
	return view('issues.index', compact(['issues']));
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

	return view('issues.create', compact(['types', 'users']));
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

        $issue = new Issue();

	$issue->creator_id = auth()->id();
	$issue->owner_id = auth()->id();

	$issue->save();

	\Session::flash('message', 'Issue successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($issue, 201);
	}

	return redirect('/issues');	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
        //
	if(request()->expectsJson()) {
            return $issue;
	}

	return view('issues.show', compact(['issue']));	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        //
	$types = Type::all();
	$users = User::all();

        //
	return view('issues.edit', compact(['issue', 'types', 'users']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue)
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

	$issue->save();

	\Session::flash('message', 'Issue successfully edited.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($issue, 200);
	}

	return redirect($issue->path());	        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue)
    {
        //
        $issue->delete();

	\Session::flash('message', 'Issue successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();	
    }

    //
    public function list()
    {
        $issues = Issue::all();

	if(request()->expectsJson()) {
            return $issues;
	}

	return view('issues.list', compact(['issues']));
    }
}
