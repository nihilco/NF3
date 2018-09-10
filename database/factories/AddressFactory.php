<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Address::class, function (Faker $faker) {
    return [
        'creator_id' => 1,
	'owner_id' => 1,
	//'name_id' => function () {
	//    return factory(App\Models\Name::class)->create()->id;
	//},
	'address1' => $faker->streetAddress,
	'city_id' => function () {
	    return factory(App\Models\City::class)->create()->id;
	},
	'province_id' => function () {
	    return factory(App\Models\Province::class)->create()->id;
	},
	'postal_code' => $faker->postcode,
	'country_id' => function() {
	    return factory(App\Models\Country::class)->create()->id;
	},
    ];
});
