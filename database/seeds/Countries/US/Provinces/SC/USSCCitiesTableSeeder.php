<?php

use Illuminate\Database\Seeder;

class USSCCitiesTableSeeder extends Seeder
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
	$province = \App\Models\Province::where('code', 'SC')->first();
	$country = \App\Models\Country::where('code', 'US')->first();

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Charleston',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Clemson',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Clinton',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Columbia',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Conway',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Greenville',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Spartanburg',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);
    }
}
