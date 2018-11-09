<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//
	$this->call([
	    DECitiesTableSeeder::class, // Germany
	    IECitiesTableSeeder::class, // Ireland	    
	    ESCitiesTableSeeder::class, // Spain
	    CHCitiesTableSeeder::class, // Switzerland
	    USCitiesTableSeeder::class, // United States
	]);
    }
}
