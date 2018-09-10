<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'creator_id' => 1,
	'owner_id' => 1,
	'website_id' => function() {
	    return factory(App\Models\Website::class)->create()->id;
	},
	'name' => $faker->words(rand(3,6), true),
	'slug' => $faker->slug,
	'description' => $faker->paragraph,
	'content' => $faker->paragraphs(3, true),
    ];
});
