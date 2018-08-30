<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Record::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'zone_id' => function() {
	    return factory(\App\Models\Zone::class)->create()->id;
	},
	'name' => $faker->domainWord . '.' . $faker->domainName,
	'type' => $faker->randomElement($array = array ('NS', 'MX', 'A', 'AAAA', 'TXT')),
	'data' => $faker->domainName,
    ];
});
