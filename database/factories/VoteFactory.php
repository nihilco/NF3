<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Vote::class, function (Faker $faker) {

    $resources = [
	\App\Models\Post::class,
    ];

    $resource = factory($resources[array_rand($resources)])->create();

    return [
        //
    	'owner_id' => 1,
	'creator_id' => 1,
	'votable_id' => $resource->id,
	'votable_type' => get_class($resource),
	'vote' => $faker->randomElement($array = array ('up', 'down')),
    ];
});
