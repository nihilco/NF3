<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Thread::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'subject' => $faker->words(rand(1,5), true),
	'slug' => $faker->slug,
	'content' => $faker->paragraphs(rand(1,5), true),
	'replies_count' => rand(1,10),
    ];
});
