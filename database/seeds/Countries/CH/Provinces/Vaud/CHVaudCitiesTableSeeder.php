<?php

use Illuminate\Database\Seeder;

class CHVaudCitiesTableSeeder extends Seeder
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
	$province = \App\Models\Province::where('code', 'Vaud')->first();
	$country = \App\Models\Country::where('code', 'CH')->first();

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Clarens',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Lausanne',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);
    }
}
