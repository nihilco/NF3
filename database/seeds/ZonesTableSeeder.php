<?php

use Illuminate\Database\Seeder;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(App\Models\Zone::class)->create([
	    'domain_id' => 1,
	]);

	//
	factory(App\Models\Zone::class)->create([
	    'domain_id' => 2,
	]);
    }
}
