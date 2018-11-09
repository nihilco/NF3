<?php

use Illuminate\Database\Seeder;

class DECitiesTableSeeder extends Seeder
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
	    DEBWCitiesTableSeeder::class, // BW
	    DELSCitiesTableSeeder::class, // LS
	]);
    }
}
