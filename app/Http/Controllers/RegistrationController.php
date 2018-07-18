<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Events\UserRegistered;

class RegistrationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['create', 'store']);
    }
    
    //
    public function create()
    {
	if(!auth()->guest()) {
	    return redirect()->route('dashboard');
	}
	
        return view('registration.create');
    }

    //
    public function store(RegistrationRequest $request)
    {
	//
	$user = $request->process();

	//
	event(new UserRegistered($user));

	// Login the user
	\Auth::login($user);
	
        return redirect()->route('dashboard');
    }
}
