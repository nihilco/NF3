<?php

namespace App\Console\Commands\Torn;

use Illuminate\Console\Command;

class Attacks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'torn:attacks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape data for Torn attacks.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $json = \Torn::attacks(18569);

        $attacks = \App\Models\Torn\Attack::all();
	$players = \App\Models\Torn\Player::all();
	$factions = \App\Models\Torn\Faction::all();

	$last = $attacks->last();

        $c = 0; // Total attacks
	$d = 0; // New attacks
	$e = 0; // New players
	$f = 0; // New factions

        foreach($json['attacks'] as $key => $attack) {

	    if($key <= $last->torn_id) {
	        continue;
	    }

            if(!$at = $attacks->where('torn_id', $key)->first()) {
	    
	        $at = new \App\Models\Torn\Attack();

	        $at->torn_id = $key;
	        $at->attacker_player_id = ($attack['attacker_id'] != 0) ? $attack['attacker_id'] : null;
	        $at->attacker_faction_id = ($attack['attacker_faction'] != 0) ? $attack['attacker_faction'] : null;
	        $at->defender_player_id = ($attack['defender_id'] != 0) ? $attack['defender_id'] : null;
	        $at->defender_faction_id = ($attack['defender_faction'] != 0) ? $attack['defender_faction'] : null;
	        $at->result = $attack['result'];
	        $at->stealthed = $attack['stealthed'];
	        $at->respect_gain = $attack['respect_gain'];
	        $at->chain_link = $attack['chain'];
	        $at->started_at = \Carbon\Carbon::createFromTimestamp($attack['timestamp_started'], 'Europe/London');
	        $at->ended_at = \Carbon\Carbon::createFromTimestamp($attack['timestamp_ended'], 'Europe/London');
	        $at->creator_id = 1;
	        $at->owner_id = 1;
	    
	        $at->save();

	        if($attack['attacker_id'] > 0 && !$players->where('torn_id', $attack['attacker_id'])->first()) {
	            $player = new \App\Models\Torn\Player();

		    $player->torn_id = $attack['attacker_id'];
		    $player->faction_id = $attack['attacker_faction'];
		    $player->name = $attack['attacker_name'];
		    $player->creator_id = 1;
		    $player->owner_id = 1;

		    $player->save();

		    $players->push($player);

		    $e++;
	        }

	        if($attack['defender_id'] > 0 && !$players->where('torn_id', $attack['defender_id'])->first()) {
	            $player = new \App\Models\Torn\Player();

		    $player->torn_id = $attack['defender_id'];
		    $player->faction_id = $attack['defender_faction'];
		    $player->name = $attack['defender_name'];
		    $player->creator_id = 1;
		    $player->owner_id = 1;

		    $player->save();

		    $players->push($player);

		    $e++;
	        }

	        if($attack['attacker_faction'] > 0 && !$factions->where('torn_id', $attack['attacker_faction'])->first()) {
	            $faction = new \App\Models\Torn\Faction();

		    $faction->torn_id = $attack['attacker_faction'];
		    $faction->name = $attack['attacker_factionname'];
		    $faction->respect = 0;
		    $faction->creator_id = 1;
		    $faction->owner_id = 1;

		    $faction->save();

		    $factions->push($faction);

		    $f++;
	        }

	        if($attack['defender_faction'] > 0 && !$factions->where('torn_id', $attack['defender_faction'])->first()) {
	            $faction = new \App\Models\Torn\Faction();

		    $faction->torn_id = $attack['defender_faction'];
		    $faction->name = $attack['defender_factionname'];
		    $faction->respect = 0;
		    $faction->creator_id = 1;
		    $faction->owner_id = 1;

		    $faction->save();

		    $factions->push($faction);

		    $f++;
	        }

	        $attacks->push($at);

		$d++;
	    }

            $c++;
        }

	if($c > 0) {
	    $this->info(
	        '[' . \Carbon\Carbon::now()->toDateTimeString() . '] ATTACKS' . PHP_EOL .
	        '  Processed ' . $c . ' attacks.' . PHP_EOL .
	        '    + Added ' . $d . ' attacks' . PHP_EOL .
	        '    + Added ' . $e . ' players' . PHP_EOL .
	        '    + Added ' . $f . ' factions'
	    );
	}
        
    }
}
