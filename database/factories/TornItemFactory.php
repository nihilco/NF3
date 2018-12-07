<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Torn\Item::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'name' => $faker->words(rand(1,3), true),
	'description' => $faker->paragraph,
	'buy_price' => rand(1,1000000),
	'sell_price' => rand(1,1000000),
	'market_value' => rand(1,1000000),
	'circulation' => rand(1,1000000),
    ];
});
