<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Event::class, function (Faker $faker) {

    $now = \Carbon\Carbon::now();

    return [
        'creator_id' => 1,
	'owner_id' => 1,
	'website_id' => function() {
	    return factory(\App\Models\Website::class)->create()->id;
	},
	'name' => $faker->words(rand(2,5), true),
	'slug' => $faker->slug,
	'description' => $faker->paragraph,
	'starts_at' => $now,
	'ends_at' => $now,
    ];
});
