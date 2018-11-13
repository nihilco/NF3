<?php

use Illuminate\Database\Seeder;

class GameActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$skills = \App\Models\Game\Skill::all();

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 1,
	    'name' => 'Dig Clay',
	    'description' => 'Use a shovel to dig clay from the ground',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 2,
	    'name' => 'Train with Bronze Pickaxe',
	    'description' => 'Practice your skills with a bronze pickaxe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 3,
	    'name' => 'Mine for Copper',
	    'description' => 'Extract copper ore from the ground',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 4,
	    'name' => 'Sharpen Bronze Pickaxe',
	    'description' => 'Sharpen Bronze Pickaxe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 5,
	    'name' => 'Mine for Tin',
	    'description' => 'Extract tin ore from the ground',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 6,
	    'name' => 'Dig Mine Shaft',
	    'description' => 'Dig a tunnel to look for metal ores',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 7,
	    'name' => 'Mine for Iron',
	    'description' => 'Extract iron ore from the ground',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 8,
	    'name' => 'Train with Iron Pickaxe',
	    'description' => 'Practice your skills with an iron pickaxe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 9,
	    'name' => 'Sharpen Iron Pickaxe',
	    'description' => 'Sharpen your iron pickaxe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 10,
	    'name' => 'Mine for Coal',
	    'description' => 'Extract coal from the ground',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 11,
	    'name' => 'Train with Steel Pickaxe',
	    'description' => 'Practice your skills with a steel pickaxe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 12,
	    'name' => 'Mine for Silver',
	    'description' => 'Extract silver ore from the ground',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 13,
	    'name' => 'Sharpen Steel Pickaxe',
	    'description' => 'Sharpen your steel pickaxe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 14,
	    'name' => 'Mine for Gold',
	    'description' => 'Extract gold from the ground',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 15,
	    'name' => 'Mine for Sapphire',
	    'description' => 'Attempt to find a sapphire',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 16,
	    'name' => 'Mine for Opal',
	    'description' => 'Attempt to find an opal',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 17,
	    'name' => 'Mine for Tricantium',
	    'description' => 'Extract tricantium ore from the ground',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 18,
	    'name' => 'Train with Tricantium Pickaxe',
	    'description' => 'Practice your skills with a tricantium pickaxe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 19,
	    'name' => 'Sharpen Tricantium Pickaxe',
	    'description' => 'Sharpen your tricantium pickaxe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 20,
	    'name' => 'Mine for Pythrite',
	    'description' => 'Extract pythrite ore from the ground',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 21,
	    'name' => 'Train with Pythrite Pickaxe',
	    'description' => 'Practice your skills with a pythrite pickaxe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 22,
	    'name' => 'Mine for Ruby',
	    'description' => 'Attempt to find a ruby',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 23,
	    'name' => 'Mine for Emerald',
	    'description' => 'Attempt to find an emerald',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 24,
	    'name' => 'Sharpen Pythrite Pickaxe',
	    'description' => 'Sharpen your pythrite pickaxe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 25,
	    'name' => 'Prospect for Ubrium',
	    'description' => 'Serach for signs of ubrium ore',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 26,
	    'name' => 'Mine for Ubrium',
	    'description' => 'Extract ubrium ore from the ground',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 27,
	    'name' => 'Train with Ubrium Pickaxe',
	    'description' => 'Practice your skills with a ubrium pickaxe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 28,
	    'name' => 'Mine for Amethyst',
	    'description' => 'Attempt to find an amethyst',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 29,
	    'name' => 'Sharpen Ubrium Pickaxe',
	    'description' => 'Sharpen your ubrium pickaxe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 30,
	    'name' => 'Mine for Diamond',
	    'description' => 'Attempt to find a diamond',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 31,
	    'name' => 'Prospect for Empirium',
	    'description' => 'Serach for signs of empirium ore',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 32,
	    'name' => 'Mine for Empirium',
	    'description' => 'Extract empirium ore from the ground',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 33,
	    'name' => 'Train with Empirium Pickaxe',
	    'description' => 'Practice your skills with an empirium pickaxe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 34,
	    'name' => 'Sharpen Empirium Pickaxe',
	    'description' => 'Sharpen your empirium pickaxe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Mining')->first()->id,
	    'skill_rank' => 35,
	    'name' => 'Mine for Lustrum',
	    'description' => 'Attempt to find lustrum',
	]);
    }
}
