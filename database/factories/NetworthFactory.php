<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Torn\Networth::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'player_id' => function() {
	    return factory(App\Models\Torn\Player::class)->create()->id;
	},	
	'pending' => rand(1,10000000000),
	'wallet' => rand(1,10000000000),
	'bank' => rand(1,10000000000),
	'points' => rand(1,10000000000),
	'cayman' => rand(1,10000000000),
	'vault' => rand(1,10000000000),
	'piggybank' => rand(1,10000000000),
	'items' => rand(1,10000000000),
	'displaycase' => rand(1,10000000000),
	'bazaar' => rand(1,10000000000),
	'properties' => rand(1,10000000000),
	'stockmarket' => rand(1,10000000000),
	'auctionhouse' => rand(1,10000000000),
	'company' => rand(1,10000000000),
	'bookie' => rand(1,10000000000),
	'loan' => rand(1,10000000000),
	'unpaidfees' => rand(1,10000000000),
	'total' => rand(1,10000000000),
    ];
});
