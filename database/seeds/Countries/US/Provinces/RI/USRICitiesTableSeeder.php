<?php

use Illuminate\Database\Seeder;

class USRICitiesTableSeeder extends Seeder
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
	$province = \App\Models\Province::where('code', 'RI')->first();
	$country = \App\Models\Country::where('code', 'US')->first();

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Providence',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);
    }
}
