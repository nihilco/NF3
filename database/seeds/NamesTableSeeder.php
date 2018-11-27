<?php

use Illuminate\Database\Seeder;

class NamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(App\Models\Name::class)->create([
	    'prefix' => 'Mr',
	    'first' => 'Uriah',
	    'middle' => 'Matthews',
	    'last' => 'Clemmer',
	    'suffix' => 'IV',
	    'nickname' => 'Matt',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Kate',
	    'last' => 'Gribbin',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Ann',
	    'middle' => 'Katherine',
	    'last' => 'Taylor',
	    'nickname' => 'Ann Katherine',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Wray',
	    'last' => 'Williams',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Ben',
	    'last' => 'Hollerbach',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Carl',
	    'last' => 'Schow',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Chad',
	    'last' => 'Gary',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Nancy',
	    'last' => 'Clemmer',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Chandler',
	    'last' => 'Maze',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Clayton',
	    'last' => 'Stone',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'prefix' => 'Ms',
	    'first' => 'Anne',
	    'middle' => 'N',
	    'last' => 'Exum',
	    'nickname' => 'Anne',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Matt',
	    'last' => 'Clemmer',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'David',
	    'last' => 'Cross',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Tom',
	    'last' => 'Tisdale',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Wilhelmina',
	    'last' => 'Williams',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Chris',
	    'last' => 'Clemmer',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Jennifer',
	    'last' => 'Clemmer',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Tim',
	    'last' => 'Williams',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Nash',
	    'last' => 'Pater',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Rob',
	    'last' => 'Collins',
	]);
    }
}
