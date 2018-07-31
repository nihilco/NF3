<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Invoice::class, function (Faker $faker) {
    return [
        'creator_id' => 1,
	'owner_id' => 1,
	'type' => $faker->randomElement($array = array ('invoice', 'quote', 'estimate')),
	'account_id' => function () {
	    return factory(App\Models\Account::class)->create()->id;
	},
	'customer_id' => function () {
	    return factory(App\Models\Customer::class)->create()->id;
	},
	'billing_address_id' => function () {
	    return factory(App\Models\Address::class)->create()->id;
	},
	'shipping_address_id' => function () {
	    return factory(App\Models\Address::class)->create()->id;
	},
	'slug' => str_random(32),
	'subtotal' => $faker->numberBetween($min = 1000, $max = 100000000),
	'tax_rate' => $faker->numberBetween($min = 100, $max = 10000),
	'tax' => $faker->numberBetween($min = 100, $max = 100000000),
	'shipping' => $faker->numberBetween($min = 100, $max = 100000),
	'total' => $faker->numberBetween($min = 1000, $max = 100000000),
	'due_at' => \Carbon\Carbon::now()->addMonth(1),
	'status' => $faker->randomElement($array = array ('new', 'open', 'paid', 'late', 'void', 'overdue', 'partial')),
    ];
});
