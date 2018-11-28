<?php

use Faker\Generator as Faker;

$factory->define(App\Models\County::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'country_id' => function() {
	    return factory(App\Models\Country::class)->create()->id;
	},
	'province_id' => function() {
	    return factory(App\Models\Province::class)->create()->id;
	},
	'code' => $faker->stateAbbr,
	'name' => $faker->state,
	'description' => $faker->paragraph,	
    ];
});
