<?php

use Illuminate\Database\Seeder;

class ESProvincesTableSeeder extends Seeder
{
    //
    public function run()
    {
        //
	$country = \App\Models\Country::where('code', 'ES')->first();

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'Segovia',
	    'name' => 'Segovia',
	]);
    }
}