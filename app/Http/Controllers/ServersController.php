<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server;

class ServersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$servers = Server::all();
	return view('servers.index', compact('servers'));
    }

    //
    public function create()
    {
	return view('servers.create');
    }

    //
    public function show(Server $server)
    {
	if(request()->expectsJson()) {
            return $server;
	}

	return view('servers.show', compact(['server']));
    }

    //
    public function store(Request $request)
    {
        $this->validate(request(), [
	    'name' => 'required',
	    'hostname' => 'required',
	    'description' => 'required',
	    'ipv4' => 'required|ipv4',
	    'ipv6' => 'required|ipv6',
	]);

        $server = new Server();

	$server->creator_id = auth()->id();
	$server->owner_id = auth()->id();
	$server->name = request('name');
	$server->hostname = request('hostname');
	$server->description = request('description');
	$server->ipv4 = request('ipv4');
	$server->ipv6 = request('ipv6');

	$server->save();

	\Session::flash('message', 'Server successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($server, 201);
	}

	return redirect('/servers');
    }

    //
    public function edit(Server $server)
    {
        return view('servers.edit', compact(['server']));
    }

    //
    public function update(Request $request, Server $server)
    {
        $this->validate(request(), [
	    'name' => 'required',
	    'hostname' => 'required',
	    'description' => 'required',
	    'ipv4' => 'required|ipv4',
	    'ipv6' => 'required|ipv6',
	]);

	$server->name = request('name');
	$server->hostname = request('hostname');
	$server->description = request('description');
	$server->ipv4 = request('ipv4');
	$server->ipv6 = request('ipv6');

	$server->save();

	\Session::flash('message', 'Server successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($server, 200);
	}

	return redirect($server->path());
    }

    //
    public function destroy(Server $server)
    {
        $server->delete();

	\Session::flash('message', 'Server successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $servers = Server::all();

	if(request()->expectsJson()) {
            return $servers;
	}

	return view('servers.list', compact(['servers']));
    }
}
