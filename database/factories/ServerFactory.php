<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Server::class, function (Faker $faker) {

    $d = $faker->domainWord;

    return [
        'creator_id' => 1,
	'owner_id' => 1,
	'name' => $d,
	'description' => $faker->paragraph,
	'hostname' => $d . $faker->domainName,
	'type' => $faker->randomElement($array = array ('master', 'slave')),
	'ipv4' => $faker->ipv4,
	'ipv6' => $faker->ipv6,
	'active' => false,
    ];
});
