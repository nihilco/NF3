<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Torn\Attack::class, function (Faker $faker) {

    $dt = \Carbon\Carbon::now();

    return [
        //
	'torn_id' => rand(100000,999999),
	'attacker_player_id' => 1,
	'attacker_faction_id' => 1,
	'defender_player_id' => 1,
	'defender_faction_id' => 1,
	'result' => 'Lost',
	'started_at' => $dt,
	'ended_at' => $dt->addSeconds(15),
	'creator_id' => 1,
	'owner_id' => 1,
    ];
});
