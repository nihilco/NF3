<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Zone::class, function (Faker $faker) {
    return [
        'creator_id' => 1,
	'owner_id' => 1,
	'domain_id' => function() {
	    return factory(\App\Models\Domain::class)->create()->id;
	},
	'serial' => 1,
	'refresh' => 172800,
	'retry' => 900,
	'expire' => 1209600,
	'ttl' => 3600,
	'records_count' => 0,
	'active' => false,
    ];
});
