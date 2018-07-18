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
    }
}
