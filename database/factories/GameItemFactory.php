<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Game\Item::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'type_id' => function() {
	    return factory(App\Models\Type::class)->create()->id;
	},
	'type_rank' => rand(1,100),
	'name' => $faker->words(rand(1,3), true),
	'description' => $faker->paragraph,
    ];
});
