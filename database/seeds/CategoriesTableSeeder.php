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
	     'name' => 'Business',
	     'slug' => 'business',
	     'description' => 'Business description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Design',
	     'slug' => 'design',
	     'description' => 'Design description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Engineering',
	     'slug' => 'engineering',
	     'description' => 'Engineering description.',
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
	     'name' => 'Opinion',
	     'slug' => 'opinion',
	     'description' => 'Opinion description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Politics',
	     'slug' => 'politics',
	     'description' => 'Politics description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Science',
	     'slug' => 'science',
	     'description' => 'Science description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Software',
	     'slug' => 'software',
	     'description' => 'Software description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Technology',
	     'slug' => 'technology',
	     'description' => 'Technology  description.',
	]);

	//
	factory(App\Models\Category::class)->create([
	     'name' => 'Travel',
	     'slug' => 'travel',
	     'description' => 'Travel description.',
	]);
    }
}
