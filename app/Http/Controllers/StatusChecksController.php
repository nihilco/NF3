<?php

namespace App\Http\Controllers;

use App\Models\StatusCheck;
use Illuminate\Http\Request;

class StatusChecksController extends Controller
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
	$statusChecks = StatusCheck::all();
	return view('status-checks.index', compact('statusChecks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StatusChecks  $statusChecks
     * @return \Illuminate\Http\Response
     */
    public function show(StatusChecks $statusChecks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StatusChecks  $statusChecks
     * @return \Illuminate\Http\Response
     */
    public function edit(StatusChecks $statusChecks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StatusChecks  $statusChecks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StatusChecks $statusChecks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StatusChecks  $statusChecks
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatusChecks $statusChecks)
    {
        //
    }
}
