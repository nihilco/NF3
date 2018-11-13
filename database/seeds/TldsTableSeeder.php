<?php

use Illuminate\Database\Seeder;

class TldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(App\Models\Tld::class)
	    ->create([
	        'name' => 'COM',
		'description' => 'Commercial',
		'domain' => '.com',
	    ]);

	factory(App\Models\Tld::class)
	    ->create([
	        'name' => 'NET',
		'description' => 'Network',
		'domain' => '.net',
	    ]);

	factory(App\Models\Tld::class)
	    ->create([
	        'name' => 'ORG',
		'description' => 'Organization',
		'domain' => '.org',
	    ]);

	factory(App\Models\Tld::class)
	    ->create([
	        'name' => 'EDU',
		'description' => 'Education',
		'domain' => '.edu',
	    ]);

	factory(App\Models\Tld::class)
	    ->create([
	        'name' => 'MIL',
		'description' => 'Military',
		'domain' => '.mil',
	    ]);

	factory(App\Models\Tld::class)
	    ->create([
	        'name' => 'GOV',
		'description' => 'Government',
		'domain' => '.gov',
	    ]);

	factory(App\Models\Tld::class)
	    ->create([
	        'name' => 'CO',
		'description' => 'Company',
		'domain' => '.co',
	    ]);

	factory(App\Models\Tld::class)
	    ->create([
	        'name' => 'BIZ',
		'description' => 'Business',
		'domain' => '.biz',
	    ]);

	factory(App\Models\Tld::class)
	    ->create([
	        'name' => 'INFO',
		'description' => 'Informational',
		'domain' => '.info',
	    ]);

	factory(App\Models\Tld::class)
	    ->create([
	        'name' => 'ME',
		'description' => 'Personal',
		'domain' => '.me',
	    ]);

	factory(App\Models\Tld::class)
	    ->create([
	        'name' => 'ONLINE',
		'description' => 'Online',
		'domain' => '.online',
	    ]);
    }
}
