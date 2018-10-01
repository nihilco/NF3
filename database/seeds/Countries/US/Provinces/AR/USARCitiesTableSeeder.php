<?php

use Illuminate\Database\Seeder;

class USARCitiesTableSeeder extends Seeder
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
	$province = \App\Models\Province::where('code', 'AR')->first();
	$country = \App\Models\Country::where('code', 'US')->first();

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Conway',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);
    }
}
