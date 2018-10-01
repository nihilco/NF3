<?php

use Illuminate\Database\Seeder;

class USKYCitiesTableSeeder extends Seeder
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
	$province = \App\Models\Province::where('code', 'KY')->first();
	$country = \App\Models\Country::where('code', 'US')->first();

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Berea',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Bowling Green',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

        //
	factory(App\Models\City::class)->create([
	    'name' => 'Hazard',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Lexington',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Mount Sterling',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);
    }
}
