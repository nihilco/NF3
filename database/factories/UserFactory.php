<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {

    return [
        'username' => $faker->userName,
	//'name_id' => function() {
	//    return factory(App\Models\Name::class)->create()->id;
	//},
	'email' => $faker->email,
	'slug' => $faker->slug,
	'password' => bcrypt(str_random(32)),
	'dob_at' => $faker->dateTimeThisCentury->format('Y-m-d'),
	'accepted_tos_at' => $faker->dateTimeThisCentury->format('Y-m-d'),
	'active' => false,
    ];
    
});
