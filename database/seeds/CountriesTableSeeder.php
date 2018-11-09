<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(App\Models\Country::class)->create([
	    'code' => 'DE',
	    'name' => 'Germany',
	    'description' => 'Germany',
	]);

        //
	factory(App\Models\Country::class)->create([
	    'code' => 'CH',
	    'name' => 'Switzerland',
	    'description' => 'Switzerland',
	]);

        //
	factory(App\Models\Country::class)->create([
	    'code' => 'ES',
	    'name' => 'Spain',
	    'description' => 'Spain',
	]);

        //
	factory(App\Models\Country::class)->create([
	    'code' => 'IE',
	    'name' => 'Ireland',
	    'description' => 'Ireland',
	]);

        //
	factory(App\Models\Country::class)->create([
	    'code' => 'US',
	    'name' => 'United States',
	    'description' => 'The United States of America',
	]);
    }
}
