<?php

namespace App\Http\Controllers\Game;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Game\Stat;

class StatsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$stats = Stat::all();
	return view('game.stats.index', compact('stats'));
    }

    //
    public function create()
    {
	return view('game.stats.create');
    }

    //
    public function show(Stat $stat)
    {
	//
	if(request()->expectsJson()) {
            return $stat;
	}

	return view('game.stats.show', compact(['stat']));
    }

    //
    public function store(Request $request)
    {
	//
        $this->validate(request(), [
	    'name' => 'required|string',
	    'description' => 'required',
	    'min' => 'required|integer',
	    'max' => 'required|integer',
	    'refresh' => 'required|integer',
	    'refresh_rate' => 'required|integer|min:1',
	    'refresh_rate_unit' => 'required|in:seconds,minutes,hours,days',	    
	]);

        $stat = new Stat();

	$stat->creator_id = auth()->id();
	$stat->owner_id = auth()->id();
	$stat->name = request('name');
	$stat->description = request('description');
	$stat->min = request('min');
	$stat->max = request('max');
	$stat->refresh = request('refresh');
	$stat->refresh_rate = request('refresh_rate');
	$stat->refresh_rate_unit = request('refresh_rate_unit');

	$stat->save();

	\Session::flash('message', 'Stat successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($stat, 201);
	}

	return redirect('/game/stats');
    }

    //
    public function edit(Stat $stat)
    {
        return view('game.stats.edit', compact(['stat']));
    }

    //
    public function update(Request $request, Stat $stat)
    {
        $this->validate(request(), [
	    'name' => 'required|string',
	    'description' => 'required|string',
	    'min' => 'required|integer',
	    'max' => 'required|integer',
	    'refresh' => 'required|integer',
	    'refresh_rate' => 'required|integer|min:1',
	    'refresh_rate_unit' => 'required|in:seconds,minutes,hours,days',
	]);

	$stat->name = request('name');
	$stat->description = request('description');
	$stat->min = request('min');
	$stat->max = request('max');
	$stat->refresh = request('refresh');
	$stat->refresh_rate = request('refresh_rate');
	$stat->refresh_rate_unit = request('refresh_rate_unit');
	
	$stat->save();

	\Session::flash('message', 'Stat successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($stat, 200);
	}

	return redirect($stat->path());
    }

    //
    public function destroy(Stat $stat)
    {
	//
        $stat->delete();

	\Session::flash('message', 'Stat successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $stats = Stat::all();

	if(request()->expectsJson()) {
            return $stats;
	}

	return view('game.stats.list', compact(['stats']));
    }
}
