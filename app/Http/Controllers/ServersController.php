<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server;

class ServersController extends Controller
{
    //
    public function index()
    {
	return view('servers.index');
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
        $server = Server::create($request->all());
	
	if(request()->expectsJson()) {
            return response()->json($server, 201);
	}

	return back();
    }

    //
    public function edit(Server $server)
    {
        return view('servers.edit', compact(['server']));
    }

    //
    public function update(Request $request, Server $server)
    {
        $server->update($request->all());

	if(request()->expectsJson()) {
            return response()->json($server, 200);
	}

	return back();
    }

    //
    public function delete(Server $server)
    {
        $server->delete();

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
