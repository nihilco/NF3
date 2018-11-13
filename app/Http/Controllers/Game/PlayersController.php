<?php

namespace App\Http\Controllers\Game;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Models\Game\Player;
use App\Models\User;

class PlayersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
	$players = Player::all();
	return view('game.players.index', compact('players'));
    }

    //
    public function create()
    {
        $users = User::all();
	return view('game.players.create', compact(['users']));
    }

    //
    public function show(Player $player)
    {
	//
	if(request()->expectsJson()) {
            return $player;
	}

	return view('game.players.show', compact(['player']));
    }

    //
    public function store(Request $request)
    {
	//
        $this->validate(request(), [
	    'user' => 'required|exists:users,id',
	    'name' => 'required|string|unique:game_players,name',
	    'level' => 'required|integer|min:1',
	    'age' => 'required|integer|min:0',
	    'experience' => 'required|integer',
	]);

        $player = new Player();

	$player->user_id = request('user');
	$player->creator_id = auth()->id();
	$player->owner_id = auth()->id();
	$player->name = request('name');
	$player->level = request('level');
	$player->age = request('age');
	$player->experience = request('experience');

	$player->save();

	\Session::flash('message', 'Player successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($player, 201);
	}

	return redirect('/game/players');
    }

    //
    public function edit(Player $player)
    {
        $users = User::all();
        return view('game.players.edit', compact(['player', 'users']));
    }

    //
    public function update(Request $request, Player $player)
    {
        $this->validate(request(), [
	    'user' => 'required|exists:users,id',
	    'name' => [
	        'required',
		'string',
		Rule::unique('game_players')->ignore($player->id),
	    ],
	    'level' => 'required|integer|min:1',
	    'age' => 'required|integer|min:0',
	    'experience' => 'required|integer',	    
	]);

	$player->user_id = request('user');
	$player->name = request('name');
	$player->level = request('level');
	$player->age = request('age');
	$player->experience = request('experience');
	
	$player->save();

	\Session::flash('message', 'Player successfully updated.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json($player, 200);
	}

	return redirect($player->path());
    }

    //
    public function destroy(Player $player)
    {
	//
        $player->delete();

	\Session::flash('message', 'Player successfully deleted.');
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
            return $players;
	}

	return view('game.players.list', compact(['players']));
    }
}
