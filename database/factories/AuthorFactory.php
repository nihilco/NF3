<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Author::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'name_id' => function() {
	    return factory(App\Models\Name::class)->create()->id;
	},	
    ];
});
