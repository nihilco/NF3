<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index()
    {
	$user = auth()->user();

    	//
	if(request()->expectsJson()) {
            return $user;
	}

	return view('profiles.index', compact(['user']));
    }

    //
    public function show(User $user)
    {
	//
	if(request()->expectsJson()) {
            return $user;
	}

	return view('profiles.show', compact(['user']));        
    }
}
