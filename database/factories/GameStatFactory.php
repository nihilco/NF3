<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Game\Stat::class, function (Faker $faker) {
    return [
        'creator_id' => 1,
	'owner_id' => 1,
	'name' => $faker->words(1, true),
	'description' => $faker->paragraph,
	'min' => 1,
	'max' => 100,
	'refresh' => 5,
	'refresh_rate' => 5,
	'refresh_rate_unit' => 'minutes',
    ];
});
