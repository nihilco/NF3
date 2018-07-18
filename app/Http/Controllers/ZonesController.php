<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use App\Models\Server;
use App\Models\Zone;

class ZonesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$zones = Zone::all();
	
	return view('zones.index', compact(['zones']));
    }

    //
    public function create()
    {
	$domains = Domain::all();
	
        return view('zones.create', compact(['domains']));
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
        $this->validate(request(), [
	    'domain' => 'required|exists:domains,id',
	    'serial' => 'required',
	    'refresh' => 'required',
	    'retry' => 'required',
	    'expire' => 'required',
	    'ttl' => 'required',
	    'active' => '',
	]);

	$zone = new Zone();

	$zone->creator_id = auth()->id();
	$zone->owner_id = auth()->id();
	$zone->domain_id = request('domain');
	$zone->serial = request('serial');
	$zone->refresh = request('refresh');
	$zone->retry = request('retry');
	$zone->expire = request('expire');
	$zone->ttl = request('ttl');
	if(request('active') == 'on') {
	    $zone->active = true;
	}else{
	    $zone->active = false;
	}
	
	$zone->save();

	\Session::flash('message', 'Zone successfully created.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($zone, 201);
	}

	return redirect($zone->path());
    }

    //
    public function edit(Zone $zone)
    {
    	$domains = Domain::all();
	
        return view('zones.edit', compact(['zone', 'domains']));
    }

    //
    public function update(Request $request, Zone $zone)
    {
        $this->validate(request(), [
	    'domain' => 'required|exists:domains,id',
	    'serial' => 'required',
	    'refresh' => 'required',
	    'retry' => 'required',
	    'expire' => 'required',
	    'ttl' => 'required',
	    'active' => '',
	]);

	$zone->domain_id = request('domain');
	$zone->serial = request('serial');
	$zone->refresh = request('refresh');
	$zone->retry = request('retry');
	$zone->expire = request('expire');
	$zone->ttl = request('ttl');
	if(request('active') == 'on') {
	    $zone->active = true;
	}else{
	    $zone->active = false;
	}
	
	$zone->save();

	\Session::flash('message', 'Zone successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($zone, 200);
	}

	return redirect($zone->path());
    }

    //
    public function destroy(Zone $zone)
    {
        $zone->delete();

	\Session::flash('message', 'Zone successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

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
