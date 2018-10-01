<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
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
	     DEProvincesTableSeeder::class, // Germany
	     CHProvincesTableSeeder::class, // Switzerland
	     USProvincesTableSeeder::class, // United States
	]);
    }
}
