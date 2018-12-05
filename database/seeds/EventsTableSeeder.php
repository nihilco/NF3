<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$websites = \App\Models\Website::all();

	//
	$event = factory(\App\Models\Event::class)->create([
	    'website_id' => $websites->where('hostname', 'dev.coasttocoastcollegefair.com')->first()->id,
	    'name' => 'Fair 2016',
	    'slug' => 'fair-2016',
	    'description' => 'Fair 2016 description.',
	    'starts_at' => \Carbon\Carbon::create(2016, 3, 30, 18, 30, 00),
	    'ends_at' => \Carbon\Carbon::create(2016, 3, 30, 20, 30, 00),
	    'owner_id' => 11,
	]);

	//
	$event = factory(\App\Models\Event::class)->create([
	    'website_id' => $websites->where('hostname', 'dev.coasttocoastcollegefair.com')->first()->id,
	    'name' => 'Fair 2017',
	    'slug' => 'fair-2017',
	    'description' => 'Fair 2017 description.',
	    'starts_at' => \Carbon\Carbon::create(2017, 3, 30, 18, 30, 00),
	    'ends_at' => \Carbon\Carbon::create(2017, 3, 30, 20, 30, 00),
	    'owner_id' => 11,
	]);

	//
	$event = factory(\App\Models\Event::class)->create([
	    'website_id' => $websites->where('hostname', 'dev.coasttocoastcollegefair.com')->first()->id,
	    'name' => 'Fair 2018',
	    'slug' => 'fair-2018',
	    'description' => 'Fair 2018 description.',
	    'starts_at' => \Carbon\Carbon::create(2018, 4, 23, 18, 30, 00),
	    'ends_at' => \Carbon\Carbon::create(2018, 4, 23, 20, 30, 00),
	    'owner_id' => 11,
	]);

        //
	$event = factory(\App\Models\Event::class)->create([
	    'website_id' => $websites->where('hostname', 'dev.coasttocoastcollegefair.com')->first()->id,
	    'name' => 'Fair 2019',
	    'slug' => 'fair-2019',
	    'description' => 'Fair 2019 description.',
	    'starts_at' => \Carbon\Carbon::create(2019, 3, 5, 18, 30, 00),
	    'ends_at' => \Carbon\Carbon::create(2019, 3, 5, 20, 30, 00),
	    'owner_id' => 11,
	]);
    }
}
