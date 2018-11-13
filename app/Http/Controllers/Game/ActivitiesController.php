<?php

namespace App\Http\Controllers\Game;

use App\Models\Game\Activity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game\Skill;

class ActivitiesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$activities = Activity::all();
	return view('game.activities.index', compact('activities'));
    }

    //
    public function create()
    {
	$skills = Skill::all();
	return view('game.activities.create', compact(['skills']));
    }

    //
    public function show(Activity $activity)
    {
	//
	if(request()->expectsJson()) {
            return $activity;
	}

	return view('game.activities.show', compact(['activity']));
    }

    //
    public function store(Request $request)
    {
	//
        $this->validate(request(), [
	    'skill' => 'required|exists:game_skills,id', 
	    'skill_rank' => 'required|integer|min:1',	    
	    'name' => 'required|string',
	    'description' => 'required',
	]);

        $activity = new Activity();

	$activity->creator_id = auth()->id();
	$activity->owner_id = auth()->id();
	$activity->skill_id = request('skill');
	$activity->skill_rank = request('skill_rank');
	$activity->name = request('name');
	$activity->description = request('description');

	$activity->save();

	\Session::flash('message', 'Activity successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($activity, 201);
	}

	return redirect('/game/activities');
    }

    //
    public function edit(Activity $activity)
    {
	$skills = Skill::all();
        return view('game.activities.edit', compact(['activity', 'skills']));
    }

    //
    public function update(Request $request, Activity $activity)
    {
        $this->validate(request(), [
	    'skill' => 'required|exists:game_skills,id', 
	    'skill_rank' => 'required|integer|min:1',
	    'name' => 'required|string',
	    'description' => 'required|string',
	]);

	$activity->skill_id = request('skill');
	$activity->skill_rank = request('skill_rank');	
	$activity->name = request('name');
	$activity->description = request('description');

	$activity->save();

	\Session::flash('message', 'Activity successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($activity, 200);
	}

	return redirect($activity->path());
    }

    //
    public function destroy(Activity $activity)
    {
	//
        $activity->delete();

	\Session::flash('message', 'Activity successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $activities = Activity::all();

	if(request()->expectsJson()) {
            return $activities;
	}

	return view('game.activities.list', compact(['activities']));
    }
}
