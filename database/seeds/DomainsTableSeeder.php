<?php

use Illuminate\Database\Seeder;

class DomainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tlds = App\Models\Tld::all();

        //
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.co')->first()->id,
	    'domain' => 'nihil.co',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'nihilframework.com',
	]);
    }
}
