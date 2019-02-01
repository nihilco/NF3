<?php

use Illuminate\Database\Seeder;

class TornSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
	    TornPlayersTableSeeder::class,
	    TornFactionsTableSeeder::class,
	    TornChainsTableSeeder::class,
	    TornAttacksTableSeeder::class,
	    TornItemsTableSeeder::class,
	    TornCompaniesTableSeeder::class,
	    TornHuntsTableSeeder::class,
	    TornNetworthsTableSeeder::class,
	]);
    }
}
