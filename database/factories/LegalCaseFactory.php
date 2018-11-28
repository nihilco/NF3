<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'creator_id' => 1,
	'owner_id' => 1,
	'type_id' => function() {
	    return factory(App\Models\Type::class)->create()->id;
	},
	'status_type_id' => function() {
	    return factory(App\Models\Type::class)->create()->id;
	},
	'plaintiff_contact_id' => function() {
	    return factory(App\Models\Type::class)->create()->id;
	},
	'defendant_contact_id' => function() {
	    return factory(App\Models\Contact::class)->create()->id;
	},
	'county_id' => function() {
	    return factory(App\Models\County::class)->create()->id;
	},	
	'name' => $faker->state,
	'description' => $faker->paragraph,	
    ];
});
