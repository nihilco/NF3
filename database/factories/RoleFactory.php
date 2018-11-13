<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Role::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'name' => $faker->words(rand(1,3), true),
	'description' => $faker->paragraph,
    ];
});
