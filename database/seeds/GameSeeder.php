<?php

use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
	    GamePlayersTableSeeder::class,
	    GameStatsTableSeeder::class,
	    GameSkillsTableSeeder::class,
	    GameItemsTableSeeder::class,
	    GameActivitiesTableSeeder::class,
	]);
    }
}
