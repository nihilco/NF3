<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Obituary::class, function (Faker $faker) {

    $today = \Carbon\Carbon::now();

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
	'city_id' => function() {
	    return factory(App\Models\City::class)->create()->id;
	},
	'name_id' => function() {
	    return factory(App\Models\Name::class)->create()->id;
	},
	'description' => $faker->paragraph,
	'content' => $faker->paragraphs(rand(3,5), true),
	'born_at' => $today->subYears(rand(35,105))->subMonths(rand(1,12))->subdays(rand(1,28)),
	'died_at' => $today->subDays(rand(1,7)),
    ];
});
