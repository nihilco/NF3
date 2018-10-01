<?php

use Illuminate\Database\Seeder;

class USMOCitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//
	//  GET KEYS
	//
	$province = \App\Models\Province::where('code', 'MO')->first();
	$country = \App\Models\Country::where('code', 'US')->first();

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Columbia',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'St. Louis',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);
    }
}
