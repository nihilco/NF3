<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\OrderItem::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'name' => $faker->words(rand(1,4), true),
	'description' => $faker->paragraph,
	'quantity' => rand(1,10),
    ];
});
