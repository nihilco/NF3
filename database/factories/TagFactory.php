<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tag::class, function (Faker $faker) {
    return [
        'creator_id' => 1,
	'owner_id' => 1,
	'name' => $faker->words(rand(3,6), true),
	'description' => $faker->paragraph,
    ];
});
