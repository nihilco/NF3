<?php

use Illuminate\Database\Seeder;

class USPACitiesTableSeeder extends Seeder
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
	$province = \App\Models\Province::where('code', 'PA')->first();
	$country = \App\Models\Country::where('code', 'US')->first();

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Bethlehem',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Carlisle',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Easton',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Glenside',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Huntingdon',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Lancaster',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Philadelphia',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);

	//
	factory(App\Models\City::class)->create([
	    'name' => 'Villanova',
	    'province_id' => $province->id,
	    'country_id' => $country->id,
	]);
    }
}
