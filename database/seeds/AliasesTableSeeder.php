<?php

use Illuminate\Database\Seeder;

class AliasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$domains = \App\Models\Domain::all();
	
        //
	factory(\App\Models\Alias::class)->create([
	    'domain_id' => $domains->where('domain', 'nihil.co')->first()->id,
	    'source' => 'admin@nihil.co',
	    'destination' => 'administrator@nihil.co',
	    'active' => true,
	]);

	factory(\App\Models\Alias::class)->create([
	    'domain_id' => $domains->where('domain', 'nihil.co')->first()->id,
	    'source' => 'root@nihil.co',
	    'destination' => 'hostmaster@nihil.co',
	    'active' => true,
	]);

	factory(\App\Models\Alias::class)->create([
	    'domain_id' => $domains->where('domain', 'uclemmer.com')->first()->id,
	    'source' => 'admin@uclemmer.com',
	    'destination' => 'administrator@uclemmer.com',
	    'active' => true,
	]);

	factory(\App\Models\Alias::class)->create([
	    'domain_id' => $domains->where('domain', 'uclemmer.com')->first()->id,
	    'source' => 'root@uclemmer.com',
	    'destination' => 'hostmaster@uclemmer.com',
	    'active' => true,
	]);

    }
}
