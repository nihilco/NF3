<?php

use Illuminate\Database\Seeder;

class ESSegoviaCitiesTableSeeder extends Seeder
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
	$province = \App\Models\Province::where('code', 'Segovia')->first();
	$country = \App\Models\Country::where('code', 'ES')->first();

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Segovia',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);
    }
}
