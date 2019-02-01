<?php

namespace App\Http\Controllers\Torn;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Torn\Chain;
use App\Models\Torn\Attack;
use App\Models\Torn\Player;

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
	$chains = Chain::orderBy('started_at', 'DESC')->paginate(25);
	return view('torn.chains.index', compact(['chains']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	return view('torn.chains.create');
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

        $chain = new Chain();

	$chain->creator_id = auth()->id();
	$chain->owner_id = auth()->id();

	$chain->save();

	\Session::flash('message', 'Chain successfully created.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($chain, 201);
	}

	return redirect('/torn/chains');	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chain  $chain
     * @return \Illuminate\Http\Response
     */
    public function show(Chain $chain)
    {
	//
	$attacks = Attack::where('started_at', '>=', '2019-01-11 16:06:50')->where('ended_at', '<=', '2019-01-16 02:07:05')->where('attacker_faction_id', 18569)->orderBy('chain_link', 'DESC')->get();

	$ats = Attack::where('started_at', '>', '2019-01-16 02:07:05')->where('ended_at', '<=', '2019-01-17 14:07:05')->where('attacker_faction_id', 18569)->orderBy('chain_link', 'DESC')->get();

	$players = Player::where('faction_id', 18569)->get();

	$results = [];

	foreach($attacks as $attack) {
	    if(array_key_exists($attack->attacker_player_id, $results)) {
	        $results[$attack->attacker_player_id]['hits'] += 1;
		$results[$attack->attacker_player_id]['respect'] += $attack->respect_gain;
	        $results[$attack->attacker_player_id]['attacks'][] = $attack;
	    }else{
		$player = $players->where('torn_id', $attack->attacker_player_id)->first();
		$result = [
		    'name' => $player->name,
		    'hits' => 1,
		    'respect' => $attack->respect_gain,
		    'attacks' => [$attack],
		];
		
		$results[$attack->attacker_player_id] = $result;
	    }
	}

	foreach($ats as $at) {
	    if(array_key_exists($at->attacker_player_id, $results)) {
	        $results[$at->attacker_player_id]['hits'] += .5;
		$results[$at->attacker_player_id]['respect'] += ($at->respect_gain * .5);
	        $results[$at->attacker_player_id]['attacks'][] = $at;
	    }else{
		$player = $players->where('torn_id', $at->attacker_player_id)->first();
		$result = [
		    'name' => $player->name,
		    'hits' => .5,
		    'respect' => $at->respect_gain * .5,
		    'attacks' => [$at],
		];
		
		$results[$at->attacker_player_id] = $result;
	    }
	}

	uasort($results, function ($a, $b) {
	    if($a['hits'] == $b['hits']) {
	        return 0;
	    }

	    return ($a['hits'] > $b['hits']) ? -1 : 1;
	});

        //
	if(request()->expectsJson()) {
            return [
	        'chain' => $chain,
		'results' => $results,
	    ];
	}

	return view('torn.chains.show', compact(['chain', 'results']));	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chain  $chain
     * @return \Illuminate\Http\Response
     */
    public function edit(Chain $chain)
    {
        //
	return view('torn.chains.edit', compact(['chain']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chain  $chain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chain $chain)
    {
        //
        //
        $this->validate(request(), [

	]);

	//

	$chain->save();

	\Session::flash('message', 'Chain successfully updated.');
	\Session::flash('alert-class', 'alert-success');
	
	if(request()->expectsJson()) {
            return response()->json($chain, 200);
	}

	return redirect($chain->path());		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chain  $chain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chain $chain)
    {
        //
        $chain->delete();

	\Session::flash('message', 'Chain successfully deleted.');
	\Session::flash('alert-class', 'alert-success');

	if(request()->expectsJson()) {
            return response()->json(null, 204);
	}

	return back();	
    }

    //
    public function list()
    {
        $chains = Chain::all();

	if(request()->expectsJson()) {
            return $chains;
	}

	return view('torn.chains.list', compact(['chains']));
    }
}
