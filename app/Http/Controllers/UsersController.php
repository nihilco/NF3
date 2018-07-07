<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function index()
    {
	return view('users.index');
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
        $user = User::create($request->all());
	
	if(request()->expectsJson()) {
            return response()->json($user, 201);
	}

	return back();
    }

    //
    public function edit(User $user)
    {
        return view('users.edit', compact(['user']));
    }

    //
    public function update(Request $request, User $user)
    {
        $user->update($request->all());

	if(request()->expectsJson()) {
            return response()->json($user, 200);
	}

	return back();
    }

    //
    public function delete(User $user)
    {
        $user->delete();

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
