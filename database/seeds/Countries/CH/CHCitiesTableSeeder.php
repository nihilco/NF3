<?php

use Illuminate\Database\Seeder;

class CHCitiesTableSeeder extends Seeder
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
	    CHVaudCitiesTableSeeder::class, // Vaud
	]);
    }
}