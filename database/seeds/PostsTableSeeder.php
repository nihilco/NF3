<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $websites = \App\Models\Website::all();

	$date = new \Carbon\Carbon('first day of July 2018');
	
        //
	factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Basic Debian Server Setup',
	     'slug' => 'basic-debian-server-setup',
	     'description' => 'Basic Debian Server Setup description.',
	     'content' => 'Basic Debian Server Setup content.',
	     'published_at' => $date,
	]);

	//
	factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'The Three Keys to Accumulating Wealth',
	     'slug' => 'the-three-keys-to-accumulating-wealth',
	     'description' => 'The Three Keys to Accumulating Wealth description.',
	     'content' => 'The Three Keys to Accumulating Wealth content.',
	     'published_at' => $date->addDays(3),
	]);

	//
	factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'DNS Server Setup',
	     'slug' => 'dns-server-setup',
	     'description' => 'DNS Server Setup description.',
	     'content' => 'DNS Server Setup content.',
	     'published_at' => $date->addDays(4),
	]);

	//
	factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Prioritize and Automate Saving',
	     'slug' => 'prioritize-and-automate-saving',
	     'description' => 'Prioritize and Automate Saving description.',
	     'content' => 'Prioritize and Automate Saving content.',
	     'published_at' => $date->addDays(3),
	]);

	//
	factory(App\Models\Post::class)->create([
             'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Web Server Setup',
	     'slug' => 'web-server-setup',
	     'description' => 'Web Server Setup description.',
	     'content' => 'Web Server Setup content.',
	     'published_at' => $date->addDays(4),
	]);

	//
	factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Know Your Numbers.  Make a Budget.',
	     'slug' => 'know-your-numbers-make-a-budget',
	     'description' => 'Know Your Numbers.  Make a Budget description.',
	     'content' => 'Know Your Numbers.  Make a Budget content.',
	     'published_at' => $date->addDays(3),
	]);

	//
	factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Database Server Setup',
	     'slug' => 'database-server-setup',
	     'description' => 'Database Server Setup description.',
	     'content' => 'Database Server Setup content.',
	     'published_at' => $date->addDays(4),
	]);

	//
	factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Frugality: Live Within Your Means',
	     'slug' => 'frugality-live-within-your-means',
	     'description' => 'Frugality: Live Within Your Means description.',
	     'content' => 'Frugality: Live WIthin Your Means content.',
	     'published_at' => $date->addDays(3),
	]);

	//
	factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Email Server Setup',
	     'slug' => 'email-server-setup',
	     'description' => 'Email Server Setup description.',
	     'content' => 'Email Server Setup content.',
	     'published_at' => $date->addDays(4),
	]);

	//
	factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Bourbon',
	     'slug' => 'bourbon',
	     'description' => 'Bourbon description.',
	     'content' => 'Bourbon content.',
	     'published_at' => $date->addDays(3),
	]);
    }
}
