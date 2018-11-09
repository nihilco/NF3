<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class RepresentativesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    //
    public function index()
    {
	//
	$event = Event::where('name', 'Fair 2019')->first();

	//
	return view('representatives.index', compact(['event']));
    }
}
