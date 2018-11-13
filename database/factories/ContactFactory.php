<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Contact::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'name_id' => function() {
	    return factory(App\Models\Name::class)->create()->id;
	},
    ];
});

$factory->afterCreating(\App\Models\Contact::class, function($model) {
    $address = factory(\App\Models\Address::class)->create();
    $model->addresses()->save($address);
});