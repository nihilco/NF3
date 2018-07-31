<?php

use Faker\Generator as Faker;

$factory->define(App\Models\InvoiceItem::class, function (Faker $faker) {
    return [
        'creatr_id' => 1,
	'owner_id' => 1,
	'invoice_id' => function() {
	    return factory(App\Models\Invoice::class)->create()->id;
	},
    ];
});
