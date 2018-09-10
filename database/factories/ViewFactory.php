<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\View::class, function (Faker $faker) {

    $resources = [
        \App\Models\Page::class,
	\App\Models\Post::class,
    ];

    $resource = factory($resources[array_rand($resources)])->create();

    return [
        //
    	'owner_id' => 1,
	'creator_id' => 1,
	'viewable_id' => $resource->id,
	'viewable_type' => get_class($resource),
	'ipv4' => $faker->ipv4,
	'user_agent' => $faker->userAgent,
    ];
});
