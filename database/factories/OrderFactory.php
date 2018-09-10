<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Order::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'slug' => $faker->slug,
	'status_type_id' => function() {
	    return factory(App\Models\Type::class)->create()->id;
	},
	'items_count' => rand(1,10),
    ];
});
