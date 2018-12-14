<?php

use Illuminate\Database\Seeder;

class TornSeeder extends Seeder
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
    	    TornItemsTableSeeder::class,
	    TornPlayersTableSeeder::class,
	    TornFactionsTableSeeder::class,
	    TornCompaniesTableSeeder::class,
	    TornNetworthsTableSeeder::class,
	    TornChainsTableSeeder::class,
	    TornAttacksTableSeeder::class,
	]);

    }
}
