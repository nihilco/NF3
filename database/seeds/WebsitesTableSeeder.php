<?php

use Illuminate\Database\Seeder;

class WebsitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => 1,
	     'hostname' => 'www.nihil.co',
	]);

	//
	factory(App\Models\Website::class)->create([
	     'domain_id' => 1,
	     'hostname' => 'dev.nihil.co',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => 2,
	     'hostname' => 'www.nihilframework.com',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => 2,
	     'hostname' => 'www.nihilframework.com',
	]);
    }
}
