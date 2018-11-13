<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Torn\Hunt::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'award' => rand(3000,1000000),
	'skill' => rand(0,10000),
	'animals_killed_count' => rand(1,25),
    ];
});
