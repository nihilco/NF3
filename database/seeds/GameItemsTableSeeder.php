<?php

use Illuminate\Database\Seeder;

class GameItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$typeTool = factory(App\Models\Type::class)->create([
	    'grouping' => \App\Models\Game\Item::class,
	    'name' => 'Tool',
	    'slug' => 'tool',
	    'description' => 'Tool items.',
	]);

	$typeShovel = factory(App\Models\Type::class)->create([
	    'parent_id' => $typeTool->id,
	    'grouping' => \App\Models\Game\Item::class,
	    'name' => 'Shovel',
	    'slug' => 'shovel',
	    'description' => 'Tool shovel items.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeShovel->id,
	    'type_rank' => 1,
	    'name' => 'Shovel',
	    'description' => 'Shovel item.',
	]);
	
	$typePickaxe = factory(App\Models\Type::class)->create([
	    'parent_id' => $typeTool->id,
	    'grouping' => \App\Models\Game\Item::class,
	    'name' => 'Pickaxe',
	    'slug' => 'pickaxe',
	    'description' => 'Tool pickaxe items.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typePickaxe->id,
	    'type_rank' => 1,
	    'name' => 'Bronze Pickaxe',
	    'description' => 'Bronze Pickaxe item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typePickaxe->id,
	    'type_rank' => 2,
	    'name' => 'Iron Pickaxe',
	    'description' => 'Iron Pickaxe item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typePickaxe->id,
	    'type_rank' => 3,
	    'name' => 'Steel Pickaxe',
	    'description' => 'Steel Pickaxe item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typePickaxe->id,
	    'type_rank' => 4,
	    'name' => 'Tricantium Pickaxe',
	    'description' => 'Tricantium Pickaxe item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typePickaxe->id,
	    'type_rank' => 5,
	    'name' => 'Pythrite Pickaxe',
	    'description' => 'Pythrite Pickaxe item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typePickaxe->id,
	    'type_rank' => 6,
	    'name' => 'Ubrium Pickaxe',
	    'description' => 'Ubrium Pickaxe item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typePickaxe->id,
	    'type_rank' => 7,
	    'name' => 'Empirium Pickaxe',
	    'description' => 'Empirium Pickaxe item.',
	]);
	
    }
}
