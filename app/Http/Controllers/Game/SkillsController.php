<?php

namespace App\Http\Controllers\Game;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Game\Skill;

class SkillsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$skills = Skill::all();
	return view('game.skills.index', compact('skills'));
    }

    //
    public function create()
    {
	return view('game.skills.create');
    }

    //
    public function show(Skill $skill)
    {
	//
	if(request()->expectsJson()) {
            return $skill;
	}

	return view('game.skills.show', compact(['skill']));
    }

    //
    public function store(Request $request)
    {
	//
        $this->validate(request(), [
	    'name' => 'required|string',
	    'description' => 'required',
	]);

        $skill = new Skill();

	$skill->creator_id = auth()->id();
	$skill->owner_id = auth()->id();
	$skill->name = request('name');
	$skill->description = request('description');

	$skill->save();

	\Session::flash('message', 'Skill successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($skill, 201);
	}

	return redirect('/game/skills');
    }

    //
    public function edit(Skill $skill)
    {
        return view('game.skills.edit', compact(['skill']));
    }

    //
    public function update(Request $request, Skill $skill)
    {
        $this->validate(request(), [
	    'name' => 'required|string',
	    'description' => 'required|string',
	]);

	$skill->name = request('name');
	$skill->description = request('description');

	$skill->save();

	\Session::flash('message', 'Skill successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($skill, 200);
	}

	return redirect($skill->path());
    }

    //
    public function destroy(Skill $skill)
    {
	//
        $skill->delete();

	\Session::flash('message', 'Skill successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();
    }

    //
    public function list()
    {
        $skills = Skill::all();

	if(request()->expectsJson()) {
            return $skills;
	}

	return view('game.skills.list', compact(['skills']));
    }
}
