<?php

use Illuminate\Database\Seeder;

class TornFactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$player1 = \App\Models\Torn\Player::find(1);

	$faction1 = factory(\App\Models\Torn\Faction::class)->create([
	    'torn_id' => 18569,
	    'leader_player_id' => $player1->id,
	    'name' => 'Beach Side Ghetto',
	    'respect' => 2799386,
	    'players_count' => 92,
	]);
    }
}
