<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {

    return [
        'username' => $faker->userName,
	'name' => $faker->name,
	'email' => $faker->email,
	'password' => bcrypt(str_random(32)),
	'dob_at' => $faker->dateTimeThisCentury->format('Y-m-d'),
	'accepted_tos_at' => $faker->dateTimeThisCentury->format('Y-m-d'),
	'active' => false,
    ];
    
});
