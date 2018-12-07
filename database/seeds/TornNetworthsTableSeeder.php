<?php

use Illuminate\Database\Seeder;

class TornNetworthsTableSeeder extends Seeder
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
	    TornNetworthsUriahSeeder::class,
	]);
    }
}
