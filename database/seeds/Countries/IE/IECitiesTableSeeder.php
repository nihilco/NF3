<?php

use Illuminate\Database\Seeder;

class IECitiesTableSeeder extends Seeder
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
	    IEMunsterCitiesTableSeeder::class, // Munster
	]);
    }
}