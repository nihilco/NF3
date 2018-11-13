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
	factory(App\Models\Role::class)->create([
	    'name' => 'Global Administrator',
	    'description' => 'Global Administrator description.',
	]);

        //
	factory(App\Models\Role::class)->create([
	    'name' => 'Global Moderator',
	    'description' => 'Global Moderator description.',
	]);

        //
	factory(App\Models\Role::class)->create([
	    'name' => 'Global User',
	    'description' => 'Global User description.',
	]);

        //
	factory(App\Models\Role::class)->create([
	    'name' => 'Administrator',
	    'description' => 'Administrator description.',
	]);

        //
	factory(App\Models\Role::class)->create([
	    'name' => 'Moderator',
	    'description' => 'Moderator description.',
	]);

        //
	factory(App\Models\Role::class)->create([
	    'name' => 'User',
	    'description' => 'User description.',
	]);
    }
}
