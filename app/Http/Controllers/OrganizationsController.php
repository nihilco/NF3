<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
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
	$organizations = Organization::where('website_id', config('app.website')->id)->orderBy('name_alpha')->paginate(25);

	return view('organizations.index', compact(['organizations']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('organizations.create');
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

        $organization = new Organization();

	$organization->creator_id = auth()->id();
	$organization->owner_id = auth()->id();

	$organization->save();

	\Session::flash('message', 'Organization successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($organization, 201);
	}

	return redirect('/organizations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        //
	if(request()->expectsJson()) {
	    return $organization;
	}

	return view('organizations.show', compact(['organization']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        //
	return view('organizaions.edit', compact(['organization']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        $this->validate(request(), [

	]);

	//

	$organization->save();

	\Session::flash('message', 'Organization successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($organization, 200);
	}

	return redirect($organization->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
	//
        $organization->delete();

	\Session::flash('message', 'Organization successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();        
    }

    //
    public function list()
    {
        $organizations = Organization::all();

	if(request()->expectsJson()) {
            return $organizations;
	}

	return view('organizations.list', compact(['organizations']));
    }
}
