<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Session;

class SessionsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['create', 'store']);
    }

    //
    public function index()
    {
        $sessions = Session::all();
	return view('sessions.index', compact(['sessions']));
    }

    //
    public function create()
    {
        if(!auth()->guest()) {
	    return redirect()->route('dashboard');
	}

	return view('sessions.create');
    }

    //
    public function store(LoginRequest $request)
    {
	if(!auth()->attempt(request(['email', 'password']))) {
	    return back();
	}

	return redirect()->route('dashboard');
    }

    //
    public function show()
    {
        return view('sessions.show');
    }

    //
    public function edit(Session $session)
    {
        return view('sessions.edit', compact('session'));
    }

    //
    public function update(Request $request, Session $session)
    {
        //
    }

    //
    public function destroy(Session $session)
    {
        auth()->logout();

	return redirect()->home();
    }
}
