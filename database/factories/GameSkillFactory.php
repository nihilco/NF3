<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Game\Skill::class, function (Faker $faker) {
    return [
        //
	'creator_id' => 1,
	'owner_id' => 1,
	'name' => $faker->words(rand(2,5), true),
	'description' => $faker->paragraph,
    ];
});
