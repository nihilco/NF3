<?php

use Illuminate\Database\Seeder;

class CoasttoCoastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	//  GET ALL KEYS
        //
	$countries = \App\Models\Country::all();
	$provinces = \App\Models\Province::all();
	$cities = \App\Models\City::all();

	//
	//
	//
	$name = factory(\App\Models\Name::class)->create([
	
	]);

	$address = factory(\App\Models\Address::class)->create([
	
	]);

	$organization = factory(\App\Models\Organization::class)->create([
	
	]);

	$contact = factory(\App\Models\Contact::class)->create([
	
	]);
    }
}
