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
        //
	//
	//
	$name = factory(App\Models\Name::class)->create([
            'prefix' => 'Mr.',
	    'first' => 'Uriah',
	    'middle' => 'Matthews',
	    'last' => 'Clemmer',
	    'suffix' => 'IV',
	    'nickname' => 'Matt',
	]);

	$address = factory(App\Models\Address::class)->create([
	    'address1' => '6409 Sail Point Lane',
	    'city_id' => App\Models\City::where('name', 'Hixson')->first()->id,
	    'province_id' => App\Models\Province::where('code', 'TN')->first()->id,
	    'postal_code' => '37343',
	    'country_id' => App\Models\Country::where('code', 'US')->first()->id,
	]);
	
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $name->id,
	]);

	$contact->addresses()->save($address);

	$contact->organizations()->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'address_id' => $address->id,
	    'name_display' => 'The NIHIL Corporation',
	    'name_alpha' => 'NIHIL Corporation, The',
	    'website' => 'https://www.nihil.co',
	]);

	$user = App\Models\User::find(1);
	$user->contact_id = $contact->id;
	$user->save();

	//
	//
	//
        //
	$name = factory(App\Models\Name::class)->create([
            'prefix' => 'Ms.',
	    'first' => 'Anne',
	    'middle' => 'N',
	    'last' => 'Exum',
	    'nickname' => 'Anne',
	]);
	
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $name->id,
	]);

	$user = App\Models\User::where('email', 'annenexum@gmail.com')->first();
	$user->contact_id = $contact->id;
	$user->save();

	//
	//
	//
        //
	$name = factory(App\Models\Name::class)->create([
            'prefix' => 'Mr',
	    'first' => 'Matt',
	    'last' => 'Clemmer',
	]);
	
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $name->id,
	]);

	$user = App\Models\User::where('email', 'mclemmer@gmail.com')->first();
	$user->contact_id = $contact->id;
	$user->save();

	//
	//
	//
        //
	$name = factory(App\Models\Name::class)->create([
            'prefix' => 'Mr',
	    'first' => 'David',
	    'last' => 'Cross',
	]);
	
	$contact = factory(App\Models\Contact::class)->create([
	    'name_id' => $name->id,
	]);

	$user = App\Models\User::where('email', 'dcross9999@gmail.com')->first();
	$user->contact_id = $contact->id;
	$user->save();	

    }
}
