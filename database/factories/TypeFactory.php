<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Type::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'grouping' => \App\Models\Type::class,
	'name' => $faker->words(rand(1,3), true),
	'slug' => $faker->slug,
	'description' => $faker->paragraph,
    ];
});
