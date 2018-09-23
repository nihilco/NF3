<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Mailbox::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'domain_id' => function() {
	    return factory(App\Models\Domain::class)->create()->id;
	},
	'email' => $faker->email,
	'password' => bcrypt(str_random(32)),
	'active' => false,
    ];
});
