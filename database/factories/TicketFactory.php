<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Ticket::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'subject' => $faker->words(rand(1,5), true),
	'slug' => $faker->slug,
	'content' => $faker->paragraphs(rand(1,5), true),
	'type_id' => function() {
	    return factory(App\Models\Type::class)->create()->id;
	},
	'status_type_id' => function() {
	    return factory(App\Models\Type::class)->create()->id;
	},
	'priority_type_id' => function() {
	    return factory(App\Models\Type::class)->create()->id;
	},	
	'resolution_type_id' => function() {
	    return factory(App\Models\Type::class)->create()->id;
	},
	'replies_count' => rand(1,10),
    ];
});
