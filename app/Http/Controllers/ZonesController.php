<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;

class ZonesController extends Controller
{
    //
    public function index()
    {
	return view('zones.index');
    }

    //
    public function show(Zone $zone)
    {
	if(request()->expectsJson()) {
            return $zone;
	}

	return view('zones.show', compact(['zone']));
    }

    //
    public function store(Request $request)
    {
        $zone = Zone::create($request->all());
	
	if(request()->expectsJson()) {
            return response()->json($zone, 201);
	}

	return back();
    }

    //
    public function edit(Zone $zone)
    {
        return view('zones.edit', compact(['zone']));
    }

    //
    public function update(Request $request, Zone $zone)
    {
        $zone->update($request->all());

	if(request()->expectsJson()) {
            return response()->json($zone, 200);
	}

	return back();
    }

    //
    public function delete(Zone $zone)
    {
        $zone->delete();

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $zones = Zone::all();

	if(request()->expectsJson()) {
            return $zones;
	}

	return view('zones.list', compact(['zones']));
    }
}
