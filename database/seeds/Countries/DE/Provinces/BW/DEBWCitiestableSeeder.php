<?php

use Illuminate\Database\Seeder;

class DEBWCitiesTableSeeder extends Seeder
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
	$province = \App\Models\Province::where('code', 'BW')->first();
	$country = \App\Models\Country::where('code', 'DE')->first();

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Karlsruhe',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);
    }
}
