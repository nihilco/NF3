<?php

use Illuminate\Database\Seeder;

class IEMunsterCitiesTableSeeder extends Seeder
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
	$province = \App\Models\Province::where('code', 'Munster')->first();
	$country = \App\Models\Country::where('code', 'IE')->first();

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Limerick',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);
    }
}
