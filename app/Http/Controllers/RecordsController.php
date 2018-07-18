<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Models\Zone;

class RecordsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$records = Record::all();
	
	return view('records.index', compact(['records']));
    }

    //
    public function create()
    {
	$zones = Zone::all();
	
	return view('records.create', compact(['zones']));
    }

    //
    public function show(Record $record)
    {
	if(request()->expectsJson()) {
            return $record;
	}

	return view('records.show', compact(['record']));
    }

    //
    public function store(Request $request)
    {
	//dd(request());
	
        $this->validate(request(), [
	    'zone' => 'required|exists:zones,id',
	    'name' => 'required',
	    'ttl' => 'required',
	    'type' => 'required|in:ns,mx,a,aaaa,txt',
	    'priority' => '',
	    'data' => 'required',
	]);

	$record = new Record();

	$record->creator_id = auth()->id();
	$record->owner_id = auth()->id();
	$record->zone_id = request('zone');
	$record->name = request('name');
	$record->ttl = request('ttl');
	$record->type = request('type');
	$record->priority = request('priority');
	$record->data = request('data');

	$record->save();

	\Session::flash('message', 'Record successfully created.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($record, 201);
	}

	return redirect($record->path());
    }

    //
    public function edit(Record $record)
    {
	$zones = Zone::all();
	
        return view('records.edit', compact(['record', 'zones']));
    }

    //
    public function update(Request $request, Record $record)
    {
        $this->validate(request(), [
	    'zone' => 'required|exists:zones,id',
	    'name' => 'required',
	    'ttl' => 'required',
	    'type' => 'required|in:ns,mx,a,aaaa,txt',
	    'priority' => '',
	    'data' => 'required',
	]);

	$record->zone_id = request('zone');
	$record->name = request('name');
	$record->ttl = request('ttl');
	$record->type = request('type');
	$record->priority = request('priority');
	$record->data = request('data');

	$record->save();

	\Session::flash('message', 'Record successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($record, 200);
	}

	return redirect($record->path());
    }

    //
    public function destroy(Record $record)
    {
        $record->delete();

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $records = Record::all();

	if(request()->expectsJson()) {
            return $records;
	}

	return view('records.list', compact(['records']));
    }
}
