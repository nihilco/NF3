<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Player::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'torn_id' => rand(1000,10000),
	'name' => $faker->words(rand(1,3), true),
    ];
});
