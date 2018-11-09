<?php

use Illuminate\Database\Seeder;

class IEProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//
	$country = \App\Models\Country::where('code', 'IE')->first();

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'Munster',
	    'name' => 'Muster',
	]);
    }
}
