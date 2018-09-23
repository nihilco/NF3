<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Publication::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'work_id' => function() {
	    return factory(App\Models\Work::class)->create()->id;
	},
	'publisher_id' => function() {
	    return factory(App\Models\Organization::class)->create()->id;
	},
	'format_type_id' => function() {
	    return factory(App\Models\Type::class)->create()->id;
	},
	'edition_type_id' => function() {
	    return factory(App\Models\Type::class)->create()->id;
	},
	'printing' => 1,
	'number_line' => '1 2 3 4 5 6 7 8 9 0',
	'isbn13' => $faker->ean13,
    ];
});
