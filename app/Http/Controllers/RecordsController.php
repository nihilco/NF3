<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordsController extends Controller
{
    //
    public function index()
    {
	return view('records.index');
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
        $record = Record::create($request->all());
	
	if(request()->expectsJson()) {
            return response()->json($record, 201);
	}

	return back();
    }

    //
    public function edit(Record $record)
    {
        return view('records.edit', compact(['record']));
    }

    //
    public function update(Request $request, Record $record)
    {
        $record->update($request->all());

	if(request()->expectsJson()) {
            return response()->json($record, 200);
	}

	return back();
    }

    //
    public function delete(Record $record)
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
