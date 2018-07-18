<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$users = User::all();
	return view('users.index', compact('users'));
    }

    //
    public function create()
    {
        return view('users.create');
    }

    //
    public function show(User $user)
    {
	if(request()->expectsJson()) {
            return $user;
	}

	return view('users.show', compact(['user']));
    }

    //
    public function store(Request $request)
    {
        $thirteen = \Carbon\Carbon::now()->subYear(13)->format('m/d/Y');
    
	$this->validate(request(), [
	    'username' => 'required|unique:users,username',
	    'email' => 'required|email|unique:users,email',
	    'name' => 'required',
	    'password' => 'required|min:8',
	    'dob' => 'required|date|before_or_equal:' . $thirteen,
	]);

	$user = new User();

	$user->username = request('username');
	$user->email = request('email');
	$user->name = request('name');
        $user->password = \Hash::make(request('password'));
	$user->dob_at = new \Carbon\Carbon(request('dob'));

	$user->save();

	\Session::flash('message', 'User successfully created.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($user, 201);
	}

	return redirect($user->path());
    }

    //
    public function edit(User $user)
    {
        return view('users.edit', compact(['user']));
    }

    //
    public function update(Request $request, User $user)
    {
	$thirteen = \Carbon\Carbon::now()->subYear(13)->format('m/d/Y');

	$this->validate(request(), [
	    'username' => 'required|unique:users,username,' . $user->id,
	    'email' => 'required|email|unique:users,email,' . $user->id,
	    'name' => 'required',
	    'dob' => 'required|date|before_or_equal:' . $thirteen,
	]);

	$user->username = request('username');
	$user->email = request('email');
	$user->name = request('name');
	$user->dob_at = new \Carbon\Carbon(request('dob'));

	$user->save();

	\Session::flash('message', 'User successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($user, 200);
	}

	return redirect($user->path());
    }

    //
    public function destroy(User $user)
    {
        $user->delete();

	\Session::flash('message', 'User successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $users = User::all();

	if(request()->expectsJson()) {
            return $users;
	}

	return view('users.list', compact(['users']));
    }
}
