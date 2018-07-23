<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Address::class, function (Faker $faker) {
    return [
        'creator_id' => 1,
	'owner_id' => 1,
        'name' => $faker->name,
	'address1' => $faker->streetAddress,
	'city' => $faker->city,
	'province_id' => function () {
	    return factory(App\Models\Province::class)->create()->id;
	},
	'postal_code' => $faker->postcode,
	'country_id' => function() {
	    return factory(App\Models\Country::class)->create()->id;
	},
    ];
});
