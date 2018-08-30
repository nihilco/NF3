<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Reply::class, function (Faker $faker) {

    $resources = [
	\App\Models\Post::class,
    ];

    $resource = factory($resources[array_rand($resources)])->create();

    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'resource_id' => $resource->id,
	'resource_type' => get_class($resource),
	'content' => $faker->paragraphs(rand(1,3), true),
    ];
});
