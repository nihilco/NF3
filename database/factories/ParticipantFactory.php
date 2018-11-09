<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Participant::class, function (Faker $faker) {
    return [
        'creator_id' => 1,
	'owner_id' => function() {
	    return factory(App\Models\User::class)->create()->id;
	},
	'event_id' => function () {
	    return factory(App\Models\Event::class)->create()->id;
	},
    ];
});
