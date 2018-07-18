<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tld::class, function (Faker $faker) {

    $tld = $faker->tld;

    return [
        'creator_id' => 1,
	'owner_id' => 1,
	'name' => ucfirst($tld),
	'description' => $faker->paragraph,
	'domain' => $tld,
    ];
});
