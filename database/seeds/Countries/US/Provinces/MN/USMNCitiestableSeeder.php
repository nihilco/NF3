<?php

use Illuminate\Database\Seeder;

class USMNCitiesTableSeeder extends Seeder
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
	$province = \App\Models\Province::where('code', 'MN')->first();
	$country = \App\Models\Country::where('code', 'US')->first();

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Northfield',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);
    }
}
