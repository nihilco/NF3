<?php

use Illuminate\Database\Seeder;

class CHProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//
	$country = \App\Models\Country::where('code', 'CH')->first();

	//
	factory(App\Models\Province::class)->create([
	    'country_id' => $country->id,
	    'code' => 'Vaud',
	    'name' => 'Vaud',
	]);
    }
}
