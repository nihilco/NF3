<?php

use Illuminate\Database\Seeder;

class ESCitiesTableSeeder extends Seeder
{
    public function run()
    {
        $this->call([
	    ESSegoviaCitiesTableSeeder::class, // Segovia
	]);
    }
}