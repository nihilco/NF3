<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Website::class, function (Faker $faker) {

    return [
        'creator_id' => 1,
	'owner_id' => 1,
	'domain_id' => function() {
	    return factory(App\Models\Domain::class)->create()->id;
	},
	'hostname' => 'www' . $faker->domainName,
	'under_construction' => true,
	'active' => false,
    ];
});
