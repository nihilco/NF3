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
	    'code' => 'US',
	    'name' => 'United States',
	    'description' => 'The United States of America',
	]);
    }
}
