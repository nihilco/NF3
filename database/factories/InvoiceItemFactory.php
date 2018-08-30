<?php

use Faker\Generator as Faker;

$factory->define(App\Models\InvoiceItem::class, function (Faker $faker) {
    return [
        'creator_id' => 1,
	'owner_id' => 1,
	'invoice_id' => function() {
	    return factory(App\Models\Invoice::class)->create()->id;
	},
	'name' => $faker->words(rand(2,5), true),
	'description' => $faker->paragraph,
	'units' => $u = rand(1,10),
	'unit_price' => $up = rand(99,1000000),
	'subtotal' => $u * $up,
    ];
});
