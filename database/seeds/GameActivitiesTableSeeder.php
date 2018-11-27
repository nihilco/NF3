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
	//  COOKING
	//

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 1,
	    'name' => 'Light Cooking Fire',
	    'description' => 'Use firewood to make a cooking fire',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 2,
	    'name' => 'Chop Apple',
	    'description' => 'Use kitchen knife to cut up an apple',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 3,
	    'name' => 'Sharpen Kitchen Knife',
	    'description' => 'Sharpen kitchen knife in order to keep cooking',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 4,
	    'name' => 'Make Flour',
	    'description' => 'Grind wheat to make flour',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 5,
	    'name' => 'Make Dough',
	    'description' => 'Combine flour and egg to make dough',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 6,
	    'name' => 'Clean the Kitchen',
	    'description' => 'A dirty kitchen is no place to cook',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 7,
	    'name' => 'Make Bread',
	    'description' => 'Use dough to bake bread',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 8,
	    'name' => 'Cook flounder',
	    'description' => 'Cook a flounder',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 9,
	    'name' => 'Make Sausage',
	    'description' => 'Use raw pork belly to make sausage',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 10,
	    'name' => 'Make Cheese',
	    'description' => 'Use milk to make cheese',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 11,
	    'name' => 'Cook Tuna',
	    'description' => 'Cook a tuna',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 12,
	    'name' => 'Make Bacon',
	    'description' => 'Use raw pork belly to make bacon',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 13,
	    'name' => 'Apple Pie',
	    'description' => 'Bake a delicious pie with dough and chopped apples',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 14,
	    'name' => 'Cook Chicken',
	    'description' => 'Cook raw chicken',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 15,
	    'name' => 'Cook Catfish',
	    'description' => 'Cook a catfish',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 16,
	    'name' => 'Cook Steak',
	    'description' => 'Cook a steak',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 17,
	    'name' => 'Cook Halibut',
	    'description' => 'Cook a halibut',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 18,
	    'name' => 'Bake Pizza',
	    'description' => 'Use dough, tomato, and cheese to make a pizza',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 19,
	    'name' => 'Cook Salmon',
	    'description' => 'Cook a salmon',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 20,
	    'name' => 'Make Wine',
	    'description' => 'Make wine from grapes',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 21,
	    'name' => 'Make Stew',
	    'description' => 'Make stew from raw steak and potatoes',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 22,
	    'name' => 'Cook River Trout',
	    'description' => 'Cook a river trout',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 23,
	    'name' => 'Cook Crab',
	    'description' => 'Cook a crab',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 24,
	    'name' => 'Make Beer',
	    'description' => 'Brew beer from barley',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 25,
	    'name' => 'Cook Lobster',
	    'description' => 'Cook a lobster',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 26,
	    'name' => 'Cook Cod',
	    'description' => 'Cook a cod',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 27,
	    'name' => 'Cook Lake Trout',
	    'description' => 'Cook a lake trout',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 28,
	    'name' => 'Light Arkana Cooking Fire',
	    'description' => 'Light fire with arkana log',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 29,
	    'name' => 'Cook Bluescale',
	    'description' => 'Cook a bluescale',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 30,
	    'name' => 'Light Drindle Cooking Fire',
	    'description' => 'Light fire with drindle log',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 31,
	    'name' => 'Cook Pfyshy',
	    'description' => 'Cook a pfyshy',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 32,
	    'name' => 'Light Ryndum Cooking Fire',
	    'description' => 'Light fire with ryndum log',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 33,
	    'name' => 'Cook Yipple',
	    'description' => 'Cook a yipple',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 34,
	    'name' => 'Light Lancor Cooking Fire',
	    'description' => 'Light fire with lancor log',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Cooking')->first()->id,
	    'skill_rank' => 35,
	    'name' => 'Cook Grapplish',
	    'description' => 'Cook a grapplish',
	]);

	//
	//  CRAFTING
	//

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 1,
	    'name' => 'Make Clay Pot',
	    'description' => 'Use clay to make a pot to hold things',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 2,
	    'name' => 'Tan Cow Hide',
	    'description' => 'Make leather from cow hide',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 3,
	    'name' => 'Make Ring Mold',
	    'description' => 'Use clay to make a mold to create rings',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 4,
	    'name' => 'Make Leather Armor',
	    'description' => 'Use leather to create armor',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 5,
	    'name' => 'Cut Gemstone',
	    'description' => 'Turn a raw gem into a beautiful stone',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 6,
	    'name' => 'Make Silver Sapphire Ring',
	    'description' => 'Make a beautiful silver ring with sapphire gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 7,
	    'name' => 'Make Silver Opal Ring',
	    'description' => 'Make a beautiful silver ring with opal gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 8,
	    'name' => 'Make Pendant Mold',
	    'description' => 'Use clay to make a mold to create pendants',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 9,
	    'name' => 'Make Silver Sapphire Pendant',
	    'description' => 'Make a beautiful silver pendant with sapphire gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 10,
	    'name' => 'Make Gold Sapphire Ring',
	    'description' => 'Make a beautiful gold ring with sapphire gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 11,
	    'name' => 'Make Silver Opal Pendant',
	    'description' => 'Make a beautiful silver pendant with opal gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 12,
	    'name' => 'Make Gold Sapphire Pendant',
	    'description' => 'Make a beautiful gold pendant with sapphire gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 13,
	    'name' => 'Make Silver Ruby Ring',
	    'description' => 'Make a beautiful silver ring with Ruby gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 14,
	    'name' => 'Make Gold Opal Ring',
	    'description' => 'Make a beautiful gold ring with opal gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 15,
	    'name' => 'Make Silver Ruby Pendant',
	    'description' => 'Make a beautiful silver pendant with ruby gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 16,
	    'name' => 'Make Gold Opal Pendant',
	    'description' => 'Make a beautiful gold pendant with opal gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 17,
	    'name' => 'Make Silver Emerald Ring',
	    'description' => 'Make a beautiful silver ring with emerald gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 18,
	    'name' => 'Make Gold Ruby Ring',
	    'description' => 'Make a beautiful gold ring with ruby gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 19,
	    'name' => 'Make Silver Emerald Pendant',
	    'description' => 'Make a beautiful silver pendant with emerald gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 20,
	    'name' => 'Make Gold Ruby Pendant',
	    'description' => 'Make a beautiful gold pendant with rubygem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 21,
	    'name' => 'Make Gold Emerald Ring',
	    'description' => 'Make a beautiful gold ring with emerald gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 22,
	    'name' => 'Make Silver Amethyst Ring',
	    'description' => 'Make a beautiful silver ring with amethyst gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 23,
	    'name' => 'Make Gold Emerald Pendant',
	    'description' => 'Make a beautiful gold pendant with emerald gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 24,
	    'name' => 'Make Silver Amethyst Pendant',
	    'description' => 'Make a beautiful silver pendant with amethyst gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 25,
	    'name' => 'Cut Mythical Gemstone',
	    'description' => 'Turn a raw mythical gem into a beautiful stone',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 26,
	    'name' => 'Make Silver Diamond Ring',
	    'description' => 'Make a beautiful silver ring with diamond gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 27,
	    'name' => 'Make Gold Amethyst Ring',
	    'description' => 'Make a beautiful gold ring with amethyst gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 28,
	    'name' => 'Make Silver Diamond Pendant',
	    'description' => 'Make a beautiful silver pendant with diamond gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 29,
	    'name' => 'Make Gold Amethyst Pendant',
	    'description' => 'Make a beautiful gold pendant with amethyst gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 30,
	    'name' => 'Make Gold Diamond Ring',
	    'description' => 'Make a beautiful gold ring with diamdond gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 31,
	    'name' => 'Make Gold Diamond Pendant',
	    'description' => 'Make a beautiful gold pendant with diamond gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 32,
	    'name' => 'Make Silver Lustrum Ring',
	    'description' => 'Make a beautiful silver ring with lustrum gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 33,
	    'name' => 'Make Silver Lustrum Pendant',
	    'description' => 'Make a beautiful silver pendant with lustrum gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 34,
	    'name' => 'Make Gold Lustrum Ring',
	    'description' => 'Make a beautiful gold ring with lustrum gem',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Crafting')->first()->id,
	    'skill_rank' => 35,
	    'name' => 'Make Gold Lustrum Pendant',
	    'description' => 'Make a beautiful gold pendant with lustrum gem',
	]);

	//
	//  FARMING
	//

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 1,
	    'name' => 'Grow Apple',
	    'description' => 'Grow a red apple',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 2,
	    'name' => 'Harvest Apple',
	    'description' => 'Pick an apple',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 3,
	    'name' => 'Water the Orchard',
	    'description' => 'The trees need water',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 4,
	    'name' => 'Grow Wheat',
	    'description' => 'Grow golden wheat',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 5,
	    'name' => 'Water the Fields',
	    'description' => 'The fields need water',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 6,
	    'name' => 'Harvest Wheat',
	    'description' => 'Harvest wheat from the field',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 7,
	    'name' => 'Raise Chicken',
	    'description' => 'Raise a chicken',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 8,
	    'name' => 'Feed the Chickens',
	    'description' => 'The chickens need food',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 9,
	    'name' => 'Collect Chicken Egg',
	    'description' => 'Grab an egg from the chicken coop',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 10,
	    'name' => 'Clean the Chicken Coop',
	    'description' => 'It\'s a mess, but it must be done',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 11,
	    'name' => 'Butcher Chicken',
	    'description' => 'Butcher chicken to get meat and feathers',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 12,
	    'name' => 'Till the Field',
	    'description' => 'Aerate the soil',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 13,
	    'name' => 'Grow Lettuce',
	    'description' => 'Grow crisp green lettuce',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 14,
	    'name' => 'Harvest Lettuce',
	    'description' => 'Pick lettuce',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 15,
	    'name' => 'Raise Cow',
	    'description' => 'Raise a cow',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 16,
	    'name' => 'Feed the Cows',
	    'description' => 'The cows need food',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 17,
	    'name' => 'Milk Cow',
	    'description' => 'Get milk from the cow',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 18,
	    'name' => 'Clean the Stables',
	    'description' => 'It\'s a mess, but it must be done',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 19,
	    'name' => 'Butcher Cow',
	    'description' => 'Butcher cow to get meat and cow hide',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 20,
	    'name' => 'Tend the Orchard',
	    'description' => 'Prune the branches',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 21,
	    'name' => 'Grow Tomato',
	    'description' => 'Grow a red tomato',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 22,
	    'name' => 'Harvest Tomato',
	    'description' => 'Pick tomato from the vine',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 23,
	    'name' => 'Grow Grapes',
	    'description' => 'Grow grapes',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 24,
	    'name' => 'Harvest Grapes',
	    'description' => 'Pick grapes',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 25,
	    'name' => 'Fertilize the Orchard',
	    'description' => 'The orchard needs food',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 26,
	    'name' => 'Mend the Fences',
	    'description' => 'Strong fences keep the animals in',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 27,
	    'name' => 'Raise Pig',
	    'description' => 'Raise a pig',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 28,
	    'name' => 'Feed the Pigs',
	    'description' => 'The pigs need food',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 29,
	    'name' => 'Clean the Pig Pen',
	    'description' => 'It\'s a mess, but it must be done',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 30,
	    'name' => 'Butcher Pig',
	    'description' => 'Butcher pig to get meat',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 31,
	    'name' => 'Grow Potato',
	    'description' => 'Grow a potato',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 32,
	    'name' => 'Harvest Potato',
	    'description' => 'Harvest potato from the field',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 33,
	    'name' => 'Fertilize the Fields',
	    'description' => 'The field needs food',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 34,
	    'name' => 'Grow Barley',
	    'description' => 'Grow barley',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Farming')->first()->id,
	    'skill_rank' => 35,
	    'name' => 'Harvest Barley',
	    'description' => 'Harvest barley from the field',
	]);

	//
	//  FISHING
	//

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 1,
	    'name' => 'Catch Bait Fish',
	    'description' => 'Cast your net to catch some bait',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 2,
	    'name' => 'Repair Net',
	    'description' => 'Repair your net to catch more bait',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 3,
	    'name' => 'Make a Fishing Rod',
	    'description' => 'Create a fishing rod from bamboo',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 4,
	    'name' => 'Train with Fishing Rod',
	    'description' => 'Practice using a fishing rod',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 5,
	    'name' => 'Search for Ocean Fish',
	    'description' => 'Find a good spot in the ocean to catch fish',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 6,
	    'name' => 'Catch a Flounder',
	    'description' => 'Attempt to catch a flounder',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 7,
	    'name' => 'Catch a Tuna',
	    'description' => 'Attempt to catch a tuna',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 8,
	    'name' => 'Search for River Fish',
	    'description' => 'Find a good spot on the river to catch fish',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 9,
	    'name' => 'Catch a Catfish',
	    'description' => 'Attempt to catch a catfish',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 10,
	    'name' => 'Catch a Halibut',
	    'description' => 'Attempt to catch a halibut',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 11,
	    'name' => 'Make a Fly Fishing Rod',
	    'description' => 'Create a fly fishing rod from bamboo',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 12,
	    'name' => 'Tie a Fly',
	    'description' => 'Use a feather to make a fly',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 13,
	    'name' => 'Train with Fly Fishing Rod',
	    'description' => 'Practice using a fly fishing rod',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 14,
	    'name' => 'Catch a Salmon',
	    'description' => 'Attempt to catch a salmon',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 15,
	    'name' => 'Catch a River Trout',
	    'description' => 'Attempt to catch a river trout',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 16,
	    'name' => 'Make a Crab Pot',
	    'description' => 'Create a crab pot from oak',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 17,
	    'name' => 'Catch a Crab',
	    'description' => 'Attempt to catch a crab',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 18,
	    'name' => 'Make a Lobster Pot',
	    'description' => 'Create a lobster pot from oak',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 19,
	    'name' => 'Catch a Lobster',
	    'description' => 'Attempt to catch a lobster',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 20,
	    'name' => 'Catch a Cod',
	    'description' => 'Attempt to catch a cod',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 21,
	    'name' => 'Search for Lake Fish',
	    'description' => 'Find a good spot on the lake to catch fish',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 22,
	    'name' => 'Catch a Lake Trout',
	    'description' => 'Attempt to catch a lake trout',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 23,
	    'name' => 'Catch Mythical Bait Fish',
	    'description' => 'Cast your net to catch mythical bait',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 24,
	    'name' => 'Make an Arkana Fishing Rod',
	    'description' => 'Create a fishing rod from arkana',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 25,
	    'name' => 'Search for Bluescale',
	    'description' => 'Find a spot to catch a bluescale',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 26,
	    'name' => 'Catch a Bluescale',
	    'description' => 'Attempt to catch a bluescale',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 27,
	    'name' => 'Make a Drindle Fishing Rod',
	    'description' => 'Create a fishing rod from drindle',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 28,
	    'name' => 'Search for Pfyshy',
	    'description' => 'Find a spot to catch a pfyshy',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 29,
	    'name' => 'Catch a Pfyshy',
	    'description' => 'Attempt to catch a pfyshy',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 30,
	    'name' => 'Make a Ryndum Fishing Rod',
	    'description' => 'Create a fishing rod from ryndum',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 31,
	    'name' => 'Search for Yipple',
	    'description' => 'Find a spot to catch a yipple',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 32,
	    'name' => 'Catch a Yipple',
	    'description' => 'Attempt to catch a yipple',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 33,
	    'name' => 'Make a Lancor Fishing Rod',
	    'description' => 'Create a fishing rod from lancor',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 34,
	    'name' => 'Search for Grapplish',
	    'description' => 'Find a spot to catch a grapplish',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Fishing')->first()->id,
	    'skill_rank' => 35,
	    'name' => 'Catch a Grapplish',
	    'description' => 'Attempt to catch a grapplish',
	]);

	//
	//  MINING
	//

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


	//
	//  SMITHING
	//

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 1,
	    'name' => 'Train with the Anvil',
	    'description' => 'Use your hammer with the anvil to train',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 2,
	    'name' => 'Stoke the Forge',
	    'description' => 'Practice getting the forge hot enough to melt soft metals',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 3,
	    'name' => 'Smelt Bronze Bar',
	    'description' => 'Create a bronze bar from copper ore and tin ore',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 4,
	    'name' => 'Forge Bronze Tool',
	    'description' => 'Create a tool from bronze bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 5,
	    'name' => 'Forge Bronze Armor',
	    'description' => 'Create armor from bronze bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 6,
	    'name' => 'Forge Bronze Weapon',
	    'description' => 'Create a weapon from bronze bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 7,
	    'name' => 'Smelt Iron Bar',
	    'description' => 'Create an iron bar from iron ore',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 8,
	    'name' => 'Forge Iron Tool',
	    'description' => 'Create a tool from iron bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 9,
	    'name' => 'Forge Iron Armor',
	    'description' => 'Create armor from iron bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 10,
	    'name' => 'Forge Iron Weapon',
	    'description' => 'Create a weapon from iron bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 11,
	    'name' => 'Stoke the Forge',
	    'description' => 'Practice getting the forge hot enough to melt hard metals',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 12,
	    'name' => 'Smelt Steel Bar',
	    'description' => 'Create a steel bar from iron ore and coal',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 13,
	    'name' => 'Forge Steel Tool',
	    'description' => 'Create a tool from steel bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 14,
	    'name' => 'Forge Steel Armor',
	    'description' => 'Create armor from steel bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 15,
	    'name' => 'Forge Steel Weapon',
	    'description' => 'Create a weapon from steel bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 16,
	    'name' => 'Smelt Silver Bar',
	    'description' => 'Create a silver bar from silver ore',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 17,
	    'name' => 'Smelt Gold Bar',
	    'description' => 'Create a gold bar from gold nuggets',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 18,
	    'name' => 'Stoke the Forge',
	    'description' => 'Practice getting the forge hot enough to melt mythical metals',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 19,
	    'name' => 'Smelt Tricantium Bar',
	    'description' => 'Create a tricantium bar from tricantium ore and coal',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 20,
	    'name' => 'Forge Tricantium Tool',
	    'description' => 'Create a tool from tricantium bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 21,
	    'name' => 'Forge Tricantium Armor',
	    'description' => 'Create armor from tricantium bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 22,
	    'name' => 'Forge Tricantium Weapon',
	    'description' => 'Create a weapon from tricantium bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 23,
	    'name' => 'Smelt Pythrite Bar',
	    'description' => 'Create a pythrite bar from pythrite ore and coal',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 24,
	    'name' => 'Forge Pyrite Tool',
	    'description' => 'Create a tool from pythrite bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 25,
	    'name' => 'Forge Pyrite Armor',
	    'description' => 'Create armor from pythrite bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 26,
	    'name' => 'Forge Pythrite Weapon',
	    'description' => 'Create a weapon from pythrite bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 27,
	    'name' => 'Smelt Ubrium Bar',
	    'description' => 'Create a ubrium bar from ubrium ore and coal',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 28,
	    'name' => 'Forge Ubrium Tool',
	    'description' => 'Create a tool from ubrium bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 29,
	    'name' => 'Forge Ubrium Armor',
	    'description' => 'Create armor from ubrium bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 30,
	    'name' => 'Forge Ubrium Weapon',
	    'description' => 'Create a weapon from ubrium bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 31,
	    'name' => 'Stoke the Forge',
	    'description' => 'Practice getting the forge hot enough to melt empirium',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 32,
	    'name' => 'Smelt Empirium Bar',
	    'description' => 'Create an empirium bar from emprium ore and coal',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 33,
	    'name' => 'Forge Empirium Tool',
	    'description' => 'Create a tool from empirium bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 34,
	    'name' => 'Forge Empirium Armor',
	    'description' => 'Create armor from empirium bars',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Smithing')->first()->id,
	    'skill_rank' => 35,
	    'name' => 'Forge Empirium Weapon',
	    'description' => 'Create a weapon from empirium bars',
	]);

	//
	//  WOODSMAN
	//

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 1,
	    'name' => 'Collect Firewood',
	    'description' => 'Scavange the forest floor for firewood',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 2,
	    'name' => 'Train with Hatchet',
	    'description' => 'Practice your skills with a hatchet',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 3,
	    'name' => 'Chop Bamboo',
	    'description' => 'Use your hatchet to chop bamboo',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 4,
	    'name' => 'Hone Hatchet',
	    'description' => 'Sharpen your hatchet',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 5,
	    'name' => 'Train With Bronze Axe',
	    'description' => 'Practice your skills with a bronze axe',
	]);
	
	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 6,
	    'name' => 'Chop Pine',
	    'description' => 'Chop pine tree',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 7,
	    'name' => 'Chop Oak',
	    'description' => 'Chop oak tree',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 8,
	    'name' => 'Hone Bronze Axe',
	    'description' => 'Sharpen your bronze axe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 9,
	    'name' => 'Chop Maple',
	    'description' => 'Chop maple tree',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 10,
	    'name' => 'Train with Iron Axe',
	    'description' => 'Practice your skills with an iron axe',
	]);
	
	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 11,
	    'name' => 'Chop Hickory',
	    'description' => 'Chop hickory tree',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 12,
	    'name' => 'Hone Iron Axe',
	    'description' => 'Sharpen your iron axe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 13,
	    'name' => 'Train with Steel Axe',
	    'description' => 'Practice your skills with a steel axe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 14,
	    'name' => 'Chop Cherry',
	    'description' => 'Chop cherry tree',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 15,
	    'name' => 'Hone Steel Axe',
	    'description' => 'Sharpen your steel axe',
	]);
	
	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 16,
	    'name' => 'Train with Tricantium Axe',
	    'description' => 'Practice your skills with a steel axe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 17,
	    'name' => 'Scout for Ash Tree',
	    'description' => 'Search the forest for an ash tree',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 18,
	    'name' => 'Chop Ash',
	    'description' => 'Chop ash tree',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 19,
	    'name' => 'Hone Tricantium Axe',
	    'description' => 'Sharpen your tricantium axe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 20,
	    'name' => 'Scout for Yew Tree',
	    'description' => 'Search the forest for a yew tree',
	]);
	
	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 21,
	    'name' => 'Chop Yew',
	    'description' => 'Chop yew tree',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 22,
	    'name' => 'Train with Pythrite Axe',
	    'description' => 'Practice your skills with a pythrite axe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 23,
	    'name' => 'Scout for Arkana Tree',
	    'description' => 'Search the forest for an arkana tree',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 24,
	    'name' => 'Hone Pythrite Axe',
	    'description' => 'Sharpen your pythrite axe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 25,
	    'name' => 'Chop Arkana',
	    'description' => 'Chop arkana tree',
	]);
	
	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 26,
	    'name' => 'Scout for Drindle Tree',
	    'description' => 'Search the forest for a drindle tree',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 27,
	    'name' => 'Chop Drindle',
	    'description' => 'Chop drindle tree',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 28,
	    'name' => 'Train with Ubrium Axe',
	    'description' => 'Practice your skills with an ubrium axe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 29,
	    'name' => 'Scout for Ryndum Tree',
	    'description' => 'Search the forest for a ryndum tree',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 30,
	    'name' => 'Hone Ubrium Axe',
	    'description' => 'Sharpen your ubrium axe',
	]);
	
	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 31,
	    'name' => 'Chop Ryndum',
	    'description' => 'Chop ryndum tree',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 32,
	    'name' => 'Scout for Lancor Tree',
	    'description' => 'Search the forest for a lancor tree',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 33,
	    'name' => 'Train with Empirium Axe',
	    'description' => 'Practice your skills with an empirium axe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 34,
	    'name' => 'Hone Empirum Axe',
	    'description' => 'Sharpen your empirium axe',
	]);

	//
	factory(App\Models\Game\Activity::class)->create([
	    'skill_id' => $skills->where('name', 'Woodsman')->first()->id,
	    'skill_rank' => 35,
	    'name' => 'Chop Lancor',
	    'description' => 'Chop lancor tree',
	]);
	
    }
}
