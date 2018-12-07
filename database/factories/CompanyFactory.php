<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Torn\Company::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'torn_id' => rand(100000,999999),
	'name' => $faker->words(rand(1,3), true),
    ];
});
