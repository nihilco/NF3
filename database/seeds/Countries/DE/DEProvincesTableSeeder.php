<?php

use Illuminate\Database\Seeder;

class DEProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//
	$country = \App\Models\Country::where('code', 'DE')->first();

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'BW',
	    'name' => 'Baden-Württemberg',
	]);

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'LS',
	    'name' => 'Lower Saxony',
	]);
    }
}
