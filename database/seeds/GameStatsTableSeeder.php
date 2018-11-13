<?php

use Illuminate\Database\Seeder;

class GameStatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(\App\Models\Game\Stat::class)->create([
	    'name' => 'Health',
	    'description' => 'Health is lost when training in battle, to varying degrees based on the difficulty of the opponent.  Health is also necessary when attacking or defending against other players.',
	    'min' => 0,
	    'max' => 1000000,
	    'refresh' => 1,
	    'refresh_rate' => 1,
	    'refresh_rate_unit' => 'minutes',
	]);

        //
	factory(\App\Models\Game\Stat::class)->create([
	    'name' => 'Energy',
	    'description' => 'Energy is consumed during battle actions.',
	    'min' => 0,
	    'max' => 1000000,
	    'refresh' => 1,
	    'refresh_rate' => 1,
	    'refresh_rate_unit' => 'minutes',
	]);

        //
	factory(\App\Models\Game\Stat::class)->create([
	    'name' => 'Skill',
	    'description' => 'Skill is used to perform other actions.',
	    'min' => 0,
	    'max' => 1000000,
	    'refresh' => 1,
	    'refresh_rate' => 1,
	    'refresh_rate_unit' => 'minutes',
	]);

    }
}
