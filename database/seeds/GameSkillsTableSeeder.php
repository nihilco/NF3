<?php

use Illuminate\Database\Seeder;

class GameSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(App\Models\Game\Skill::class)->create([
	    'name' => 'Mining',
	    'description' => 'The miner locates and extracts valuable raw materials from the earth.',
	]);

        //
	factory(App\Models\Game\Skill::class)->create([
	    'name' => 'Smithing',
	    'description' => 'The smith specializes in smelting ores and creating tools, weapons, and armor',
	]);

        //
	factory(App\Models\Game\Skill::class)->create([
	    'name' => 'Woodsman',
	    'description' => 'The Woodsman specializes in locating and harvesting lumber resources from nearby forests as well as distant and dangerous lands.',
	]);

        //
	factory(App\Models\Game\Skill::class)->create([
	    'name' => 'Fishing',
	    'description' => 'The fisherman specializes in locating and catching wonders of the sea.',
	]);
    }
}
