<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Torn\Chain::class, function (Faker $faker) {

    $today = \Carbon\Carbon::now();

    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'faction_id' => rand(1000,10000),
	'hits' => rand(1,10000),
	'respect' => rand(100,1000000),
	'started_at' => $today->subHours(rand(1,96))->subMinutes(rand(0,60))->subSeconds(rand(0,60)),
	'ended_at' => $today->subHours(rand(0,1))->subMinutes(rand(0,60))->subSeconds(rand(0,60)),
    ];
});
