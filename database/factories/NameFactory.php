<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Name::class, function (Faker $faker) {

    $name = $faker->firstName;

    return [
        'creator_id' => 1,
	'owner_id' => 1,
	'first' => $name,
	'last' => $faker->lastName,
	'nickname' => $name,
    ];
});
