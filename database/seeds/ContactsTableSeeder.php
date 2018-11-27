<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$names = App\Models\Name::all();
	$addresses = App\Models\Address::all();
	$organizations = App\Models\Organization::all();
	$wid = App\Models\Website::where('hostname', 'dev.nihil.co')->first()->id;
        //
	//  URIAH CLEMMER
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Clemmer')
		->where('first', 'Uriah')
	    	->first()->id,
	    'website_id' => $wid,
	]);

	$contact->addresses()->save(
	    $addresses
	        ->where('address1','6409 Sail Pointe Lane')
		->where('postal_code', '37343')
	    	->first());

	$contact->organizations()->save(
	    $organizations
		->where('name_display', 'The NIHIL Corporation')
		->first());

	$user = App\Models\User::where('email', 'uriah@nihil.co')->first();
	$user->contact_id = $contact->id;
	$user->save();

	//
	//  KATE GRIBBIN
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Gribbin')
		->where('first', 'Kate')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	$user = App\Models\User::where('email', 'kgribbin2@gmail.com')->first();
	$user->contact_id = $contact->id;
	$user->save();
	
	//
	//  ANNE KATHERINE TAYLOR
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Taylor')
		->where('first', 'Ann')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	$user = App\Models\User::where('email', 'ataylor@baylorschool.org')->first();
	$user->contact_id = $contact->id;
	$user->save();
	
	//
	//  WRAY
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Williams')
		->where('first', 'Wray')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	$user = App\Models\User::where('email', 'wray@caseantiques.com')->first();
	$user->contact_id = $contact->id;
	$user->save();
	
	//
	//  BEN HOLLERBACH
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Hollerbach')
		->where('first', 'Ben')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	$user = App\Models\User::where('email', 'ben.hollerbach@gmail.com')->first();
	$user->contact_id = $contact->id;
	$user->save();

	//
	//  CARL SCHOW
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Schow')
		->where('first', 'Carl')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	$user = App\Models\User::where('email', 'carlschow@gmail.com')->first();
	$user->contact_id = $contact->id;
	$user->save();

	//
	//  CHAD GARY
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Gary')
		->where('first', 'Chad')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	$user = App\Models\User::where('email', 'chadegary@gmail.com')->first();
	$user->contact_id = $contact->id;
	$user->save();

	//
	//  NANCY CLEMMER
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Clemmer')
		->where('first', 'Nancy')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	$user = App\Models\User::where('email', 'nancyclemmer@me.com')->first();
	$user->contact_id = $contact->id;
	$user->save();

	//
	//  CHANDLER MAZE
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Maze')
		->where('first', 'Chandler')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	$user = App\Models\User::where('email', 'chandler@mazestonelaw.com')->first();
	$user->contact_id = $contact->id;
	$user->save();

	//
	//  ANNE EXUM
        //
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Exum')
		->where('first', 'Anne')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	$user = App\Models\User::where('email', 'annenexum@gmail.com')->first();
	$user->contact_id = $contact->id;
	$user->save();

	//
	// MATT CLEMMER
        //
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Clemmer')
		->where('first', 'Matt')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	$user = App\Models\User::where('email', 'mclemmer@gmail.com')->first();
	$user->contact_id = $contact->id;
	$user->save();

	//
	//  DAVID CROSS
        //
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Cross')
		->where('first', 'David')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	$user = App\Models\User::where('email', 'dcross9999@gmail.com')->first();
	$user->contact_id = $contact->id;
	$user->save();	

	//
	//  TOM TISDALE  
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Tisdale')
		->where('first', 'Tom')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	//
	//  WILHELMINA WILLIAMS
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Williams')
		->where('first', 'Wilhelmina')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	//
	//  CHRIS CLEMMER
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Clemmer')
		->where('first', 'Chris')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	//
	//  JENNIFER CLEMMER
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Clemmer')
		->where('first', 'Jennifer')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	//
	//  TIM WILLIMAS
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Williams')
		->where('first', 'Tim')
	    	->first()
		->id,
	]);

	//
	//  NASH PATER
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Pater')
		->where('first', 'Nash')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

	//
	//  ROB COLLINS
	//
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $names
	        ->where('last', 'Collins')
		->where('first', 'Rob')
	    	->first()
		->id,
	    'website_id' => $wid,
	]);

    }
}
