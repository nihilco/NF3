<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(App\Models\User::class)
	    ->create([
	        'username' => 'uriah.clemmer@nihil.co',
		'name' => 'Uriah M. Clemmer IV',
		'email' => 'uriah@nihil.co',
		'password' => Hash::make(env('MY_PASSWORD')),
		'dob_at' => Carbon\Carbon::createFromDate(1987, 9, 22, 'America/New_York'),
		'accepted_tos_at' => Carbon\Carbon::createFromDate(2018, 7, 1, 'America/New_York'),
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'username' => 'mclemmer@gmail.com',
		'name' => 'Uriah M. Clemmer IV',
		'email' => 'mclemmer@gmail.com',
		'password' => Hash::make(env('MY_PASSWORD2')),
		'dob_at' => Carbon\Carbon::createFromDate(1987, 9, 22, 'America/New_York'),
		'accepted_tos_at' => Carbon\Carbon::createFromDate(2018, 7, 15, 'America/New_York'),
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'username' => 'kgribbin2@gmail.com',
		'name' => 'Kate Gribbin',
		'email' => 'kgribbin2@gmail.com',
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'username' => 'ataylor@baylorschool.org',
		'name' => 'Ann Katherine Taylor',
		'email' => 'ataylor@baylorschool.org',
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'username' => 'wray@caseantiques.com',
		'name' => 'Wray Williams',
		'email' => 'wray@caseantiques.com',
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'username' => 'ben.hollerbach@gmail.com',
		'name' => 'Ben Hollerbach',
		'email' => 'ben.hollerbach@gmail.com',
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'username' => 'carl@antiquarians.co',
		'name' => 'Carl Schow',
		'email' => 'carl@antiquarians.co',
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'username' => 'chad@ternionathletics.com',
		'name' => 'Chad Gary',
		'email' => 'chad@ternionathletics.com',
		'active' => true,
        ]);
    }
}
