<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Customer::class, function (Faker $faker) {
    return [
        'creator_id' => 1,
	'owner_id' => 1,
	'account_id' => function () {
	    return factory(App\Models\Account::class)->create()->id;
	},
	'stripe_id' => 'cus_' . str_random(18),
    ];
});
