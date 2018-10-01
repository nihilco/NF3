<?php

use Illuminate\Database\Seeder;

class USILCitiesTableSeeder extends Seeder
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
	$province = \App\Models\Province::where('code', 'IL')->first();
	$country = \App\Models\Country::where('code', 'US')->first();

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Bloomington',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Chicago',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Lake Forest',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

    }
}
