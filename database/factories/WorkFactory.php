<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Work::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'type_id' => function() {
	    return factory(App\Models\Type::class)->create()->id;
	},
	'title' => $faker->words(rand(3,5), true),
    ];
});
