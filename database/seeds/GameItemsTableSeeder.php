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
	// TOOLS
	//
	
	$typeTool = factory(App\Models\Type::class)->create([
	    'grouping' => \App\Models\Game\Item::class,
	    'name' => 'Tool',
	    'slug' => 'tool',
	    'description' => 'Tool items.',
	]);

	//
	//  MINING
	//

	$typeShovel = factory(App\Models\Type::class)->create([
	    'parent_id' => $typeTool->id,
	    'grouping' => \App\Models\Game\Item::class . ":Tool",
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
	    'grouping' => \App\Models\Game\Item::class . ":Tool",
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

	//
	// WOODSMAN
	//

	$typeHatchet = factory(App\Models\Type::class)->create([
	    'parent_id' => $typeTool->id,
	    'grouping' => \App\Models\Game\Item::class . ":Tool",
	    'name' => 'Hatchet',
	    'slug' => 'hatchet',
	    'description' => 'Tool hatchet items.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeHatchet->id,
	    'type_rank' => 1,
	    'name' => 'Hatchet',
	    'description' => 'Hatchet item.',
	]);
	
	$typeAxe = factory(App\Models\Type::class)->create([
	    'parent_id' => $typeTool->id,
	    'grouping' => \App\Models\Game\Item::class . ":Tool",
	    'name' => 'Axe',
	    'slug' => 'axe',
	    'description' => 'Tool axe items.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeAxe->id,
	    'type_rank' => 1,
	    'name' => 'Bronze Axe',
	    'description' => 'Bronze Axe item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeAxe->id,
	    'type_rank' => 2,
	    'name' => 'Iron Axe',
	    'description' => 'Iron Axe item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeAxe->id,
	    'type_rank' => 3,
	    'name' => 'Steel Axe',
	    'description' => 'Steel Axe item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeAxe->id,
	    'type_rank' => 4,
	    'name' => 'Tricantium Axe',
	    'description' => 'Tricantium Axe item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeAxe->id,
	    'type_rank' => 5,
	    'name' => 'Pythrite Axe',
	    'description' => 'Pythrite Axe item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeAxe->id,
	    'type_rank' => 6,
	    'name' => 'Ubrium Axe',
	    'description' => 'Ubrium Axe item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeAxe->id,
	    'type_rank' => 7,
	    'name' => 'Empirium Axe',
	    'description' => 'Empirium Axe item.',
	]);

	//
	// RESOURCES
	//
	
	$typeResource = factory(App\Models\Type::class)->create([
	    'grouping' => \App\Models\Game\Item::class,
	    'name' => 'Resource',
	    'slug' => 'resource',
	    'description' => 'Resource items.',
	]);

	//
	//  DIRT
	//
	
	$typeDirt = factory(App\Models\Type::class)->create([
	    'parent_id' => $typeResource->id,
	    'grouping' => \App\Models\Game\Item::class . ":Resource",
	    'name' => 'Dirt',
	    'slug' => 'dirt',
	    'description' => 'Resource dirt items.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeDirt->id,
	    'type_rank' => 1,
	    'name' => 'Clay',
	    'description' => 'Clay dirt item.',
	]);

	//
	//  ORE
	//

	$typeOre = factory(App\Models\Type::class)->create([
	    'parent_id' => $typeResource->id,
	    'grouping' => \App\Models\Game\Item::class . ":Resource",
	    'name' => 'Ore',
	    'slug' => 'ore',
	    'description' => 'Resource ore items.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeOre->id,
	    'type_rank' => 1,
	    'name' => 'Copper Ore',
	    'description' => 'Copper ore item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeOre->id,
	    'type_rank' => 2,
	    'name' => 'Tin Ore',
	    'description' => 'Tin ore item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeOre->id,
	    'type_rank' => 3,
	    'name' => 'Iron Ore',
	    'description' => 'Iron ore item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeOre->id,
	    'type_rank' => 4,
	    'name' => 'Silver Ore',
	    'description' => 'Silver ore item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeOre->id,
	    'type_rank' => 5,
	    'name' => 'Coal',
	    'description' => 'Coal ore item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeOre->id,
	    'type_rank' => 6,
	    'name' => 'Gold Ore',
	    'description' => 'Gold ore item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeOre->id,
	    'type_rank' => 7,
	    'name' => 'Tricantium Ore',
	    'description' => 'Tricantium ore item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeOre->id,
	    'type_rank' => 8,
	    'name' => 'Pythrite Ore',
	    'description' => 'Pythrite ore item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeOre->id,
	    'type_rank' => 9,
	    'name' => 'Ubrium Ore',
	    'description' => 'Ubrium ore item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeOre->id,
	    'type_rank' => 10,
	    'name' => 'Empirium Ore',
	    'description' => 'Empirium ore item.',
	]);

	//
	//  METAL BAR
	//

	$typeMetalBar = factory(App\Models\Type::class)->create([
	    'parent_id' => $typeResource->id,
	    'grouping' => \App\Models\Game\Item::class . ":Resource",
	    'name' => 'Metal Bar',
	    'slug' => 'metal-bar',
	    'description' => 'Resource metal bar items.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMetalBar->id,
	    'type_rank' => 1,
	    'name' => 'Copper Bar',
	    'description' => 'Copper bar item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMetalBar->id,
	    'type_rank' => 2,
	    'name' => 'Tin Bar',
	    'description' => 'Tin bar item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMetalBar->id,
	    'type_rank' => 3,
	    'name' => 'Bronze Bar',
	    'description' => 'Bronze bar item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMetalBar->id,
	    'type_rank' => 4,
	    'name' => 'Iron Bar',
	    'description' => 'Iron bar item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMetalBar->id,
	    'type_rank' => 5,
	    'name' => 'Silver Bar',
	    'description' => 'Silver bar item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMetalBar->id,
	    'type_rank' => 6,
	    'name' => 'Goad Bar',
	    'description' => 'Gold bar item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMetalBar->id,
	    'type_rank' => 7,
	    'name' => 'Tricantium Bar',
	    'description' => 'Tricantium bar item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMetalBar->id,
	    'type_rank' => 8,
	    'name' => 'Pythrite Bar',
	    'description' => 'Pythrite bar item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMetalBar->id,
	    'type_rank' => 9,
	    'name' => 'Ubrium Bar',
	    'description' => 'Ubrium bar item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMetalBar->id,
	    'type_rank' => 10,
	    'name' => 'Empirium Bar',
	    'description' => 'Empirium bar item.',
	]);

	//
	//  ROUGH GEM
	//

	$typeRoughGem = factory(App\Models\Type::class)->create([
	    'parent_id' => $typeResource->id,
	    'grouping' => \App\Models\Game\Item::class . ":Resource",
	    'name' => 'Rough Gem',
	    'slug' => 'rough-gem',
	    'description' => 'Resource rough gem items.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeRoughGem->id,
	    'type_rank' => 1,
	    'name' => 'Rough Sapphire',
	    'description' => 'Rough sapphire gem item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeRoughGem->id,
	    'type_rank' => 2,
	    'name' => 'Rough Opal',
	    'description' => 'Rough opal gem item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeRoughGem->id,
	    'type_rank' => 3,
	    'name' => 'Rough Ruby',
	    'description' => 'Rough ruby gem item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeRoughGem->id,
	    'type_rank' => 4,
	    'name' => 'Rough Emerald',
	    'description' => 'Rough emerald gem item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeRoughGem->id,
	    'type_rank' => 5,
	    'name' => 'Rough Amethyst',
	    'description' => 'Rough amethyst gem item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeRoughGem->id,
	    'type_rank' => 6,
	    'name' => 'Rough Diamond',
	    'description' => 'Rough diamond gem item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeRoughGem->id,
	    'type_rank' => 7,
	    'name' => 'Rough Lustrum',
	    'description' => 'Rough lustrum gem item.',
	]);

	//
	//  CUT GEM
	//

	$typeCutGem = factory(App\Models\Type::class)->create([
	    'parent_id' => $typeResource->id,
	    'grouping' => \App\Models\Game\Item::class . ":Resource",
	    'name' => 'Cut Gem',
	    'slug' => 'rough-gem',
	    'description' => 'Resource rough gem items.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeCutGem->id,
	    'type_rank' => 1,
	    'name' => 'Cut Sapphire',
	    'description' => 'Cut sapphire gem item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeCutGem->id,
	    'type_rank' => 2,
	    'name' => 'Cut Opal',
	    'description' => 'Cut opal gem item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeCutGem->id,
	    'type_rank' => 3,
	    'name' => 'Cut Ruby',
	    'description' => 'Cut ruby gem item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeCutGem->id,
	    'type_rank' => 4,
	    'name' => 'Cut Emerald',
	    'description' => 'Cut emerald gem item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeCutGem->id,
	    'type_rank' => 5,
	    'name' => 'Cut Amethyst',
	    'description' => 'Cut amethyst gem item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeCutGem->id,
	    'type_rank' => 6,
	    'name' => 'Cut Diamond',
	    'description' => 'Cut diamond gem item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeCutGem->id,
	    'type_rank' => 7,
	    'name' => 'Cut Lustrum',
	    'description' => 'Cut lustrum gem item.',
	]);

	//
	//  KINDLING
	//
	
	$typeKindling = factory(App\Models\Type::class)->create([
	    'parent_id' => $typeResource->id,
	    'grouping' => \App\Models\Game\Item::class . ":Resource",
	    'name' => 'Kindling',
	    'slug' => 'kindling',
	    'description' => 'Resource kindling items.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeKindling->id,
	    'type_rank' => 1,
	    'name' => 'Firewood',
	    'description' => 'Firewood kindling item.',
	]);

	//
	//  TREE
	//

	$typeTree = factory(App\Models\Type::class)->create([
	    'parent_id' => $typeResource->id,
	    'grouping' => \App\Models\Game\Item::class . ":Resource",
	    'name' => 'Tree',
	    'slug' => 'tree',
	    'description' => 'Resource tree items.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeTree->id,
	    'type_rank' => 1,
	    'name' => 'Bamboo',
	    'description' => 'Bamboo tree item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeTree->id,
	    'type_rank' => 2,
	    'name' => 'Pine Tree',
	    'description' => 'Pine tree item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeTree->id,
	    'type_rank' => 3,
	    'name' => 'Oak Tree',
	    'description' => 'Oak tree item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeTree->id,
	    'type_rank' => 4,
	    'name' => 'Maple Tree',
	    'description' => 'Maple tree item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeTree->id,
	    'type_rank' => 5,
	    'name' => 'Hickory Tree',
	    'description' => 'Hickory tree item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeTree->id,
	    'type_rank' => 6,
	    'name' => 'Cherry Tree',
	    'description' => 'Cherry tree item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeTree->id,
	    'type_rank' => 7,
	    'name' => 'Ash Tree',
	    'description' => 'Ash tree item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeTree->id,
	    'type_rank' => 8,
	    'name' => 'Yew Tree',
	    'description' => 'Yew tree item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeTree->id,
	    'type_rank' => 9,
	    'name' => 'Arkana Tree',
	    'description' => 'Arkana tree item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeTree->id,
	    'type_rank' => 10,
	    'name' => 'Drindle Tree',
	    'description' => 'Drindle tree item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeTree->id,
	    'type_rank' => 11,
	    'name' => 'Ryndum Tree',
	    'description' => 'Ryndum tree item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeTree->id,
	    'type_rank' => 12,
	    'name' => 'Lancor Tree',
	    'description' => 'Lancor tree item.',
	]);

	//
	//  LOG
	//

	$typeLog = factory(App\Models\Type::class)->create([
	    'parent_id' => $typeResource->id,
	    'grouping' => \App\Models\Game\Item::class . ":Resource",
	    'name' => 'Log',
	    'slug' => 'log',
	    'description' => 'Resource log items.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeLog->id,
	    'type_rank' => 1,
	    'name' => 'Bamboo Log',
	    'description' => 'Bamboo log item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeLog->id,
	    'type_rank' => 2,
	    'name' => 'Pine Log',
	    'description' => 'Pine log item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeTree->id,
	    'type_rank' => 3,
	    'name' => 'Oak Log',
	    'description' => 'Oak log item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeLog->id,
	    'type_rank' => 4,
	    'name' => 'Maple Log',
	    'description' => 'Maple log item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeLog->id,
	    'type_rank' => 5,
	    'name' => 'Hickory Log',
	    'description' => 'Hickory log item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeLog->id,
	    'type_rank' => 6,
	    'name' => 'Cherry Log',
	    'description' => 'Cherry log item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeLog->id,
	    'type_rank' => 7,
	    'name' => 'Ash Log',
	    'description' => 'Ash log item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeLog->id,
	    'type_rank' => 8,
	    'name' => 'Yew Log',
	    'description' => 'Yew log item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeLog->id,
	    'type_rank' => 9,
	    'name' => 'Arkana Log',
	    'description' => 'Arkana log item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeLog->id,
	    'type_rank' => 10,
	    'name' => 'Drindle Log',
	    'description' => 'Drindle log item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeLog->id,
	    'type_rank' => 11,
	    'name' => 'Ryndum Log',
	    'description' => 'Ryndum log item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeLog->id,
	    'type_rank' => 12,
	    'name' => 'Lancor Log',
	    'description' => 'Lancor log item.',
	]);

	//
	//  WOOD
	//

	$typeWood = factory(App\Models\Type::class)->create([
	    'parent_id' => $typeResource->id,
	    'grouping' => \App\Models\Game\Item::class . ":Resource",
	    'name' => 'Wood',
	    'slug' => 'wood',
	    'description' => 'Resource wood items.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeWood->id,
	    'type_rank' => 1,
	    'name' => 'Pine Wood',
	    'description' => 'Pine wood item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeWood->id,
	    'type_rank' => 2,
	    'name' => 'Oak Wood',
	    'description' => 'Oak wood item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeWood->id,
	    'type_rank' => 3,
	    'name' => 'Maple Wood',
	    'description' => 'Maple wood item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeWood->id,
	    'type_rank' => 4,
	    'name' => 'Hickory Wood',
	    'description' => 'Hickory wood item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeWood->id,
	    'type_rank' => 5,
	    'name' => 'Cherry Wood',
	    'description' => 'Cherry wood item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeWood->id,
	    'type_rank' => 6,
	    'name' => 'Ash Wood',
	    'description' => 'Ash wood item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeWood->id,
	    'type_rank' => 7,
	    'name' => 'Yew Wood',
	    'description' => 'Yew wood item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeWood->id,
	    'type_rank' => 8,
	    'name' => 'Arkana Wood',
	    'description' => 'Arkana wood item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeWood->id,
	    'type_rank' => 9,
	    'name' => 'Drindle Wood',
	    'description' => 'Drindle wood item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeWood->id,
	    'type_rank' => 10,
	    'name' => 'Ryndum Wood',
	    'description' => 'Ryndum wood item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeWood->id,
	    'type_rank' => 11,
	    'name' => 'Lancor Wood',
	    'description' => 'Lancor wood item.',
	]);

	//
	//  MISC
	//

	$typeMisc = factory(App\Models\Type::class)->create([
	    'grouping' => \App\Models\Game\Item::class . ":Resource",
	    'name' => 'Misc',
	    'slug' => 'misc',
	    'description' => 'Misc resource items.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 1,
	    'name' => 'Chicken',
	    'description' => 'Chicken misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 1,
	    'name' => 'Cow',
	    'description' => 'Cow misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 1,
	    'name' => 'Pig',
	    'description' => 'Pig misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Wheat',
	    'description' => 'Wheat misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Barley',
	    'description' => 'Barley misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Potato',
	    'description' => 'Potato misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Lettuce',
	    'description' => 'Lettuce misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Tomato',
	    'description' => 'Tomato misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Apple',
	    'description' => 'Apple misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Grapes',
	    'description' => 'Grapes misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Chopped Apple',
	    'description' => 'Chopped apple misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Egg',
	    'description' => 'Egg misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Water',
	    'description' => 'Water misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Milk',
	    'description' => 'Milk misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Dough',
	    'description' => 'Dough misc resource item.',
	]);
	
	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Cheese',
	    'description' => 'Cheese misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Bread',
	    'description' => 'Bread misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Apple Pie',
	    'description' => 'Apple pie misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Raw Chicken',
	    'description' => 'Raw chicken misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Cooked Chicken',
	    'description' => 'Cooked chicken misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Raw Steak',
	    'description' => 'Raw steak misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Cooked Steak',
	    'description' => 'Cooked steak misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Pork Belly',
	    'description' => 'Pork belly misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Wine',
	    'description' => 'Wine misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Beer',
	    'description' => 'Beer misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Pizza',
	    'description' => 'Pizza misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Sausage',
	    'description' => 'Sausage misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Bacon',
	    'description' => 'Bacon misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Stew',
	    'description' => 'Stew misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Flounder',
	    'description' => 'Flounder misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Tuna',
	    'description' => 'Tuna misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Catfish',
	    'description' => 'Catfish misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Halibut',
	    'description' => 'Halibut misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Salmon',
	    'description' => 'Salmon misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'River Trout',
	    'description' => 'River trout misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Crab',
	    'description' => 'Crab misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Lobster',
	    'description' => 'Lobster misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Cod',
	    'description' => 'Cod misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Lake Trout',
	    'description' => 'Lake trout misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Light Cooking Fire',
	    'description' => 'Light cooking fire misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Feather',
	    'description' => 'Feather misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => '',
	    'description' => ' misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Bait',
	    'description' => 'Bait misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Fly',
	    'description' => 'Fly misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Mythical Bait',
	    'description' => 'Mythical bait misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Bamboo Fishing Rod',
	    'description' => 'Bamboo fishing rod misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Arkana Fishing Rod',
	    'description' => 'Arkana fishing rod misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Drindle Fishing Rod',
	    'description' => 'Drindle fishing rod misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Ryndum Fishing Rod',
	    'description' => 'Ryndum fishing rod misc resource item.',
	]);

	factory(App\Models\Game\Item::class)->create([
	    'type_id' => $typeMisc->id,
	    'type_rank' => 2,
	    'name' => 'Lancor Fishing Rod',
	    'description' => 'Lancor fishing rod misc resource item.',
	]);

	//
	//  WEAPON
	//

	$typeWeapon = factory(App\Models\Type::class)->create([
	    'grouping' => \App\Models\Game\Item::class,
	    'name' => 'Weapon',
	    'slug' => 'weapon',
	    'description' => 'Weapon items.',
	]);

	//
	//  ARMOR
	//

	$typeArmor = factory(App\Models\Type::class)->create([
	    'grouping' => \App\Models\Game\Item::class,
	    'name' => 'Armor',
	    'slug' => 'armor',
	    'description' => 'Armor items.',
	]);

    }
}
