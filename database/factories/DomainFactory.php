<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Domain::class, function (Faker $faker) {

    $today = Carbon\Carbon::now();

    return [
        'creator_id' => 1,
	'owner_id' => 1,
	'tld_id' => 1,
	'account_id' => null,
	'domain' => $faker->domainName,
	'registered_at' => $today,
	'last_renewed_at' => $today,
	'renews_at' => $today->addYear(1),
	'active' => false,
    ];
});
