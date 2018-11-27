<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Organization::class, function (Faker $faker) {
    return [
	'creator_id' => 1,
	'owner_id' => 1,
	'website_id' => function () {
	    return factory(App\Models\Website::class)->create()->id;
	},
	'address_id' => null,
	'name_display' => $faker->company,
	'name_alpha' => $faker->company,
	'website' => 'www' . $faker->domainName,
    ];
});
