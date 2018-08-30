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
	$date = new \Carbon\Carbon('first day of July 2018');
	
        //
	factory(App\Models\Post::class)->create([
	     'name' => 'Basic Debian Server Setup',
	     'slug' => 'basic-debian-server-setup',
	     'description' => 'Basic Debian Server Setup description.',
	     'content' => 'Basic Debian Server Setup content.',
	     'published_at' => $date,
	]);

	//
	factory(App\Models\Post::class)->create([
	     'name' => 'DNS Server Setup',
	     'slug' => 'dns-server-setup',
	     'description' => 'DNS Server Setup description.',
	     'content' => 'DNS Server Setup content.',
	     'published_at' => $date->addWeeks(1),
	]);

	//
	factory(App\Models\Post::class)->create([
	     'name' => 'Web Server Setup',
	     'slug' => 'web-server-setup',
	     'description' => 'Web Server Setup description.',
	     'content' => 'Web Server Setup content.',
	     'published_at' => $date->addWeeks(2),
	]);

	//
	factory(App\Models\Post::class)->create([
	     'name' => 'Database Server Setup',
	     'slug' => 'database-server-setup',
	     'description' => 'Database Server Setup description.',
	     'content' => 'Database Server Setup content.',
	     'published_at' => $date->addWeeks(3),
	]);
    }
}
