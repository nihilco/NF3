<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(App\Models\Category::class)->create([
	     'name' => 'Books',
	     'slug' => 'books',
	     'description' => 'Books description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Finance',
	     'slug' => 'finance',
	     'description' => 'Finance description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Health',
	     'slug' => 'health',
	     'description' => 'Health description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Music',
	     'slug' => 'music',
	     'description' => 'Music description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Food',
	     'slug' => 'food',
	     'description' => 'Food description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Health',
	     'slug' => 'health',
	     'description' => 'Health description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Programming',
	     'slug' => 'Programming',
	     'description' => 'Programming description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Woodworking',
	     'slug' => 'woodworking',
	     'description' => 'Woodworking description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Fishing',
	     'slug' => 'fishing',
	     'description' => 'Fishing description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Gardening',
	     'slug' => 'gardening',
	     'description' => 'Gardening description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Brewing',
	     'slug' => 'brewing',
	     'description' => 'Brewing  description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Design',
	     'slug' => 'design',
	     'description' => 'Design description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Writing',
	     'slug' => 'writing',
	     'description' => 'Writing description.',
	]);
    }
}
