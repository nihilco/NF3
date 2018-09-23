<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Alias::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'domain_id' => function() {
	    return factory(App\Models\Domain::class)->create()->id;
	},
	'source' => $faker->email,
	'destination' => $faker->email,
	'active' => false,
    ];
});
