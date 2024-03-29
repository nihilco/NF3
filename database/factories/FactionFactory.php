<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Torn\Faction::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'torn_id' => rand(1000,10000),
	'name' => $faker->words(rand(1,3), true),
	'respect' => rand(1,5000000),
	'players_count' => rand(1,100),
    ];
});
