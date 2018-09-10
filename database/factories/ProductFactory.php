<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'name' => $faker->words(rand(1,4), true),
	'slug' => $faker->slug,
	'description' => $faker->paragraph,
	'price' => rand(100,1000000),
    ];
});
