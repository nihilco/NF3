<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Transaction::class, function (Faker $faker) {
    return [
        'creator_id' => 1,
	'owner_id' => 1,
	'account_id' => function () {
	    return factory(App\Models\Account::class)->create()->id;
	},
	'customer_id' => function () {
	    return factory(App\Models\Customer::class)->create()->id;
	},
	'invoice_id' => function () {
	    return factory(App\Models\Invoice::class)->create()->id;
	},
	'total' => $faker->numberBetween($min = 100, $max = 100000000),
    ];
});
