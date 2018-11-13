<?php

namespace App\Http\Controllers\Torn;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChainsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	$players = Player::all();
	return view('players.index', compact(['players']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(request(), [

	]);

        $player = new Player();

	$player->creator_id = auth()->id();
	$player->owner_id = auth()->id();

	$player->save();

	\Session::flash('message', 'Player successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($player, 201);
	}

	return redirect('/players');	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        //
	if(request()->expectsJson()) {
            return $player;
	}

	return view('players.show', compact(['player']));	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        //
	return view('players.edit', compact(['player']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        //
        //
        $this->validate(request(), [

	]);

	//

	$player->save();

	\Session::flash('message', 'Player successfully updated.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($player, 200);
	}

	return redirect($player->path());		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
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
        $players = Player::all();

	if(request()->expectsJson()) {
            return $players;
	}

	return view('players.list', compact(['players']));
    }
}
