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
	    'name' => 'Fair 2015',
	    'description' => '',
	    'starts_at' => \Carbon\Carbon::create(2015, 3, 5, 18, 30, 00),
	    'ends_at' => \Carbon\Carbon::create(2015, 3, 5, 20, 30, 00),
	]);

	//
	$event = factory(\App\Models\Event::class)->create([
	    'website_id' => $websites->where('hostname', 'dev.coasttocoastcollegefair.com')->first()->id,
	    'name' => 'Fair 2016',
	    'description' => '',
	    'starts_at' => \Carbon\Carbon::create(2016, 3, 5, 18, 30, 00),
	    'ends_at' => \Carbon\Carbon::create(2016, 3, 5, 20, 30, 00),
	]);

	//
	$event = factory(\App\Models\Event::class)->create([
	    'website_id' => $websites->where('hostname', 'dev.coasttocoastcollegefair.com')->first()->id,
	    'name' => 'Fair 2017',
	    'description' => '',
	    'starts_at' => \Carbon\Carbon::create(2017, 3, 5, 18, 30, 00),
	    'ends_at' => \Carbon\Carbon::create(2017, 3, 5, 20, 30, 00),
	]);

	//
	$event = factory(\App\Models\Event::class)->create([
	    'website_id' => $websites->where('hostname', 'dev.coasttocoastcollegefair.com')->first()->id,
	    'name' => 'Fair 2018',
	    'description' => '',
	    'starts_at' => \Carbon\Carbon::create(2018, 3, 5, 18, 30, 00),
	    'ends_at' => \Carbon\Carbon::create(2018, 3, 5, 20, 30, 00),
	]);

        //
	$event = factory(\App\Models\Event::class)->create([
	    'website_id' => $websites->where('hostname', 'dev.coasttocoastcollegefair.com')->first()->id,
	    'name' => 'Fair 2019',
	    'description' => '',
	    'starts_at' => \Carbon\Carbon::create(2019, 3, 5, 18, 30, 00),
	    'ends_at' => \Carbon\Carbon::create(2019, 3, 5, 20, 30, 00),
	]);

//	for($i = 1; $i <= 25; $i++) {
//	    $participant = factory(App\Models\Participant::class)->create([
//	        'event_id' => $event->id,
//	    ]);
//	    $participant->owner->contact->organizations()->save(App\Models\Organization::find(rand(1,200)));
//	}
    }
}
