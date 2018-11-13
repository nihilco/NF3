<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Game\Player::class, function (Faker $faker) {
    return [
        'creator_id' => 1,
	'owner_id' => '1',
	'name' => $faker->username,
    ];
});
