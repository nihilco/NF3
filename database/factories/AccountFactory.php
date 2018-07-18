<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Account::class, function (Faker $faker) {
    return [
    	'owner_id' => 1,
	'creator_id' => 1,
        'type' => 'test',
	'name' => $faker->words(3),
	'description' => $faker->paragraph,
	'stripe_id' => 'acct_' . str_random(16) . '-NF3',
	'publishable_key' => 'pkey_test_' . str_random(16) . '-NF3',
	'secret_key' => 'skey_test_' . str_random(16) . '-NF3',
	'active' => false,
    ];
});
