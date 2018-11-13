<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Game\Activity::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'skill_id' => function() {
	    return factory(App\Models\Game\Skill::class)->create()->id;
	},
	'skill_rank' => rand(1,100),
	'name' => $faker->sentence,
	'description' => $faker->paragraph,
    ];
});
