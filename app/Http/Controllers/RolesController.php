<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RolesController extends Controller
{
    //
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
        $this->authorize('index', Role::class);
	
	$roles = Role::all();
	return view('roles.index', compact('roles'));
    }

    //
    public function create()
    {
	$this->authorize('create', Role::class);
	return view('roles.create');
    }

    //
    public function show(Role $role)
    {
	$this->authorize('view', $role);
	
	//
	if(request()->expectsJson()) {
            return $role;
	}

	return view('roles.show', compact(['role']));
    }

    //
    public function store(Request $request)
    {
	$this->authorize('create', Role::class);
	
	//
        $this->validate(request(), [
	    'name' => 'required|string',
	    'description' => 'required',
	]);

        $role = new Role();

	$role->creator_id = auth()->id();
	$role->owner_id = auth()->id();
	$role->name = request('name');
	$role->description = request('description');

	$role->save();

	\Session::flash('message', 'Role successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($role, 201);
	}

	return redirect('/roles');
    }

    //
    public function edit(Role $role)
    {
        $this->authorize('update', $role);
        return view('roles.edit', compact(['role']));
    }

    //
    public function update(Request $request, Role $role)
    {
        $this->authorize('update', $role);
	
        $this->validate(request(), [
	    'name' => 'required|string',
	    'description' => 'required|string',
	]);

	$role->name = request('name');
	$role->description = request('description');

	$role->save();

	\Session::flash('message', 'Role successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($role, 200);
	}

	return redirect($role->path());
    }

    //
    public function destroy(Role $role)
    {
        $this->authorize('delete', $role);
	
	//
        $role->delete();

	\Session::flash('message', 'Role successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $this->authorize('list', Role::class);
	
        $roles = Role::all();

	if(request()->expectsJson()) {
            return $roles;
	}

	return view('roles.list', compact(['roles']));
    }    
}
