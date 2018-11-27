<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$gar = factory(App\Models\Role::class)->create([
	    'name' => 'Global Administrator',
	    'description' => 'Global Administrator description.',
	]);

        //
	$gmr = factory(App\Models\Role::class)->create([
	    'name' => 'Global Moderator',
	    'description' => 'Global Moderator description.',
	]);

        //
	$gur = factory(App\Models\Role::class)->create([
	    'name' => 'Global User',
	    'description' => 'Global User description.',
	]);

        //
	$ar = factory(App\Models\Role::class)->create([
	    'name' => 'Administrator',
	    'description' => 'Administrator description.',
	]);

        //
	$mr = factory(App\Models\Role::class)->create([
	    'name' => 'Moderator',
	    'description' => 'Moderator description.',
	]);

        //
	$ur = factory(App\Models\Role::class)->create([
	    'name' => 'User',
	    'description' => 'User description.',
	]);

	$user = \App\Models\User::find(1);
	$user->roles()->save($gar);
	$user->roles()->save($ur);

	$user = \App\Models\User::find(10);
	$user->roles()->save($mr);
	$user->roles()->save($ur);

	$user = \App\Models\User::find(11);
	$user->roles()->save($ur);
    }
}
