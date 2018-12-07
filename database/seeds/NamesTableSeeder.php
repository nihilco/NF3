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
	    'nickname' => 'Kate',
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
	    'nickname' => 'Wray',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Ben',
	    'last' => 'Hollerbach',
	    'nickname' => 'Ben',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Carl',
	    'last' => 'Schow',
	    'nickname' => 'Carl',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Chad',
	    'last' => 'Gary',
	    'nickname' => 'Chad',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Nancy',
	    'last' => 'Clemmer',
	    'nickname' => 'Nancy',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Chandler',
	    'last' => 'Maze',
	    'nickname' => 'Chandler',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Clayton',
	    'last' => 'Stone',
	    'nickname' => 'Clayton',
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
	    'nickname' => 'Matt',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'David',
	    'last' => 'Cross',
	    'nickname' => 'David',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Tom',
	    'last' => 'Tisdale',
	    'nickname' => 'Tom',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Wilhelmina',
	    'last' => 'Williams',
	    'nickname' => 'Wilhelmina',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Chris',
	    'last' => 'Clemmer',
	    'nickname' => 'Chris',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Jennifer',
	    'last' => 'Clemmer',
	    'nickname' => 'Jennifer',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Tim',
	    'last' => 'Williams',
	    'nickname' => 'Tim',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Nash',
	    'last' => 'Pater',
	    'nickname' => 'Nash',
	]);

        //
	factory(App\Models\Name::class)->create([
	    'first' => 'Rob',
	    'last' => 'Collins',
	    'nickname' => 'Rob',
	]);
    }
}
