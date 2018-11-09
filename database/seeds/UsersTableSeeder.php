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
	        'contact_id' => null,
	        'username' => 'uriah.clemmer@nihil.co',
		//'name' => 'Uriah M. Clemmer IV',
		'email' => 'uriah@nihil.co',
		'slug' => 'uclemmer',
		'password' => Hash::make(env('MY_PASSWORD')),
		'dob_at' => Carbon\Carbon::createFromDate(1987, 9, 22, 'America/New_York'),
		'accepted_tos_at' => Carbon\Carbon::createFromDate(2018, 7, 1, 'America/New_York'),
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'contact_id' => null,
	        'username' => 'kgribbin2@gmail.com',
		//'name' => 'Kate Gribbin',
		'email' => 'kgribbin2@gmail.com',
		'slug' => 'kgribbin',
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'contact_id' => null,
	        'username' => 'ataylor@baylorschool.org',
		//'name' => 'Ann Katherine Taylor',
		'email' => 'ataylor@baylorschool.org',
		'slug' => 'aktaylor',
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'contact_id' => null,
	        'username' => 'wray@caseantiques.com',
		//'name' => 'Wray Williams',
		'email' => 'wray@caseantiques.com',
		'slug' => 'wwilliams',
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'contact_id' => null,
	        'username' => 'ben.hollerbach@gmail.com',
		//'name' => 'Ben Hollerbach',
		'email' => 'ben.hollerbach@gmail.com',
		'slug' => 'bhollerbach',
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'contact_id' => null,
	        'username' => 'carlschow@gmail.com',
		//'name' => 'Carl Schow',
		'email' => 'carlschow@gmail.com',
		'slug' => 'cschow',
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'contact_id' => null,
	        'username' => 'chadegary@gmail.com',
		//'name' => 'Chad Gary',
		'email' => 'chadegary@gmail.com',
		'slug' => 'cgary',
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'contact_id' => null,
	        'username' => 'nancyclemmer@me.com',
		//'name' => 'Nancy Clemmer',
		'email' => 'nancyclemmer@me.com',
		'slug' => 'nclemmer',
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'contact_id' => null,
	        'username' => 'chandler@mazestonelaw.com',
		//'name' => 'Chandler Maze',
		'email' => 'chandler@mazestonelaw.com',
		'slug' => 'cmaze',
		'active' => true,
        ]);

	//
	factory(App\Models\User::class)
	    ->create([
	        'contact_id' => null,
	        'username' => 'annenexum@gmail.com',
		'email' => 'annenexum@gmail.com',
		'password' => '$2y$10$rD69WvWOXyvmWALLaps/peY8pBUf2Bx5RBqcX5wqDWZtxrl1myqQi',
		'slug' => 'anexum',
		'dob_at' => Carbon\Carbon::createFromDate(1949, 10, 22, 'America/New_York'),
                'accepted_tos_at' => Carbon\Carbon::create(2018, 10, 30, 19, 10, 14, 'America/New_York'),
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
	        'contact_id' => null,
	        'username' => 'dcross9999@gmail.com',
		'email' => 'dcross9999@gmail.com',
		'password' => '$2y$10$fA0XbRKrpHBkKpjPVsZiPuzGMzVuyMiiw4o3Yg6fAAWWT1LN6AsDy',
		'slug' => 'dcross9999',
		'dob_at' => Carbon\Carbon::createFromDate(1949, 10, 22, 'America/New_York'),
                'accepted_tos_at' => Carbon\Carbon::create(2018, 11, 06, 11, 30, 47, 'America/New_York'),
		'active' => true,
        ]);
    }
}
