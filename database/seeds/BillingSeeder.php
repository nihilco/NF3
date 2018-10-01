<?php

use Illuminate\Database\Seeder;

class BillingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = App\Models\City::all();
	$provinces = App\Models\Province::all();
	$countries = App\Models\Country::all();
	$users = App\Models\User::all();

	$name1 = factory(App\Models\Name::class)->create([
	    'prefix' => 'Mr.',
	    'first' => 'Uriah',
	    'middle' => 'M.',
	    'last' => 'Clemmer',
	    'suffix' => 'IV',
	]);

	$name2 = factory(App\Models\Name::class)->create([
	    'prefix' => 'Ms.',
	    'first' => 'Nancy',
	    'last' => 'Clemmer',
	]);

	$name3 = factory(App\Models\Name::class)->create([
	    'prefix' => 'Mr.',
	    'first' => 'Carl',
	    'last' => 'Schow',
	]);

	$name4 = factory(App\Models\Name::class)->create([
	    'prefix' => 'Mr.',
	    'first' => 'Chandler',
	    'last' => 'Maze',
	]);

	//
	//$city1 = factory(App\Models\City::class)->create([
	//    'name' => 'Hixson',
	//    'province_id' => $provinces->where('code', 'TN')->first()->id,
	//]);

	//$city2 = factory(App\Models\City::class)->create([
	//    'name' => 'Lexington',
	//    'province_id' => $provinces->where('code', 'KY')->first()->id,
	//]);

	//$city3 = factory(App\Models\City::class)->create([
	//    'name' => 'Hazard',
	//    'province_id' => $provinces->where('code', 'KY')->first()->id,
	//]);

	//$city4 = factory(App\Models\City::class)->create([
	//    'name' => 'Signal Mountain',
	//    'province_id' => $provinces->where('code', 'TN')->first()->id,
	//]);

	//$city5 = factory(App\Models\City::class)->create([
	//    'name' => 'Chattanooga',
	//    'province_id' => $provinces->where('code', 'TN')->first()->id,
	//]);

	//$city6 = factory(App\Models\City::class)->create([
	//    'name' => 'Mount Sterling',
	//    'province_id' => $provinces->where('code', 'TN')->first()->id,
	//]);

	$cityId = $cities->where('name', 'Hixson')->first()->id;
	$provinceId = $provinces->where('code', 'TN')->first()->id;
	$countryId = $countries->where('code', 'US')->first()->id;

	//
	$address1 = factory(App\Models\Address::class)->create([
	    'owner_id' => $users->where('email', 'uriah@nihil.co')->first()->id,
	    //'name_id' => $name1->id,
	    'address1' => '6409 Sail Pointe Lane',
	    'city_id' => $cityId,
	    'province_id' => $provinceId,
	    'postal_code' => '37343',
	    'country_id' => $countryId,
	]);

	$cityId = $cities->where('name', 'Lexington')->first()->id;
	$provinceId = $provinces->where('code', 'KY')->first()->id;

	//
	$address2 = factory(App\Models\Address::class)->create([
	    'owner_id' => $users->where('email', 'uriah@nihil.co')->first()->id,
	    //'name_id' => $name1->id,
	    'address1' => '855 Tremont Ave',
	    'city_id' => $cityId,
	    'province_id' => $provinceId,
	    'postal_code' => '40502',
	    'country_id' => $countryId,
	]);

	$cityId = $cities->where('name', 'Hazard')->first()->id;
	$provinceId = $provinces->where('code', 'KY')->first()->id;

	//
	$address3 = factory(App\Models\Address::class)->create([
	    'owner_id' => $users->where('email', 'uriah@nihil.co')->first()->id,
	    //'name_id' => $name1->id,
	    'address1' => '1897 Combs Road',
	    'address2' => 'Apt #1',
	    'city_id' => $cityId,
	    'province_id' => $provinceId,
	    'postal_code' => '41701',
	    'country_id' => $countryId,
	]);

	$cityId = $cities->where('name', 'Chattanooga')->first()->id;
	$provinceId = $provinces->where('code', 'TN')->first()->id;

	//
	$address4 = factory(App\Models\Address::class)->create([
	    'owner_id' => $users->where('email', 'nancyclemmer@me.com')->first()->id,
	    //'name_id' => $name2->id,
	    'address1' => '2773 Haywood Avenue',
	    'city_id' => $cityId,
	    'province_id' => $provinceId,
	    'postal_code' => '37415',
	    'country_id' => $countryId,
	]);

	$cityId = $cities->where('name', 'Signal Mountain')->first()->id;
	$provinceId = $provinces->where('code', 'TN')->first()->id;

	//
	$address5 = factory(App\Models\Address::class)->create([
	    'owner_id' => $users->where('email', 'carlschow@gmail.com')->first()->id,
	    //'name_id' => $name3->id,
	    'address1' => '956 Signal Road',
	    'address2' => 'ATTN: Carl Schow',
	    'city_id' => $cityId,
	    'province_id' => $provinceId,
	    'postal_code' => '37377',
	    'country_id' => $countryId,
	]);

	$cityId = $cities->where('name', 'Mount Sterling')->first()->id;
	$provinceId = $provinces->where('code', 'TN')->first()->id;

	//
	$address6 = factory(App\Models\Address::class)->create([
	    'owner_id' => $users->where('email', 'chandler@mazestonelaw.com')->first()->id,
	    //'name_id' => $name4->id,
	    'address1' => '127 West High Street',
	    'address2' => 'ATTN: Chandler Maze',
	    'city_id' => $cityId,
	    'province_id' => $provinceId,
	    'postal_code' => '40353',
	    'country_id' => $countryId,
	]);

	$cityId = $cities->where('name', 'Hixson')->first()->id;
	$provinceId = $provinces->where('code', 'TN')->first()->id;

	//
	$address7 = factory(App\Models\Address::class)->create([
	    //'owner_id' => $users->where('email', 'mclemmer@gmail.com')->first()->id,
	    'owner_id' => $users->where('email', 'uriah@nihil.co')->first()->id,
	    //'name_id' => $name1->id,
	    'address1' => '6409 Sail Pointe Lane',
	    'city_id' => $cityId,
	    'province_id' => $provinceId,
	    'postal_code' => '37343',
	    'country_id' => $countryId,
	]);

        // Schows website
	$invoice1 = factory(App\Models\Invoice::class)->create([
	    'type' => 'invoice',
	    'account_id' => 1,
	    'customer_id' => 6,
	    'billing_address_id' => 5,
	    'shipping_address_id' => 5,
	    'slug' => 'sFPeZ2BTbVqznM21znz994MKTa4whped',
	    'status' => 'open',
	    'subtotal' => 35500,
	    'tax_rate' => 700,
	    'tax' => 2485,
	    'shipping' => 0,
	    'total' => 37985,
	    'due_at' => \Carbon\Carbon::today(),
	    'notes' => 'Carl, this project caught me at one of those compicated transition points in life. Thank you for bearing with me until things settled down.  I included an additional discount for delays in the original time-table.',
	]);

	$invoice1->addItem('Basic Website Build', 'Two Page Layout with ~5 Pages Content', 50000);
	$invoice1->addItem('20% Discount', 'Extended Project Timeline Delays', -10000);
	$invoice1->addItem('Loyal Customer Discount', 'Thanks for being a loyal customer.', -4500);

        // Maze & Stone admin
	$invoice2 = factory(App\Models\Invoice::class)->create([
	    'type' => 'invoice',
	    'account_id' => 1,
	    'customer_id' => 9,
	    'billing_address_id' => 6,
	    'shipping_address_id' => 6,
	    'slug' => '9Q31ZU2mU7TOGh8YwoD2CR2rxc9FUGJy',
	    'status' => 'open',
	    'subtotal' => 25000,
	    'tax_rate' => 700,
	    'tax' => 1750,
	    'shipping' => 0,
	    'total' => 26750,
	    'due_at' => \Carbon\Carbon::today(),
	    'notes' => 'Chandler, thanks for bearing with me as we develop new features.  I know that this can be a bumpy road at times, but I am growing increasingly happy with our application.  Seeing it in-action helps me to understand both the application\'s form and function.  Since this will continue to develop, I have affixed a discounted value for the work I have done so far.  Additionally, I would like to setup a monthly contract for continued development, but we can discuss this later, in person.  I am eager to hear your thoughts.  Thanks for your business.',
	]);

	$invoice2->addItem('Custom CRM', '', 50000);
	$invoice2->addItem('Developmental Discount', 'Let\'s develop features as we go.', -25000);

	// Nancy Clemmer hosting
	$invoice3 = factory(App\Models\Invoice::class)->create([
	    'type' => 'invoice',
	    'account_id' => 1,
	    'customer_id' => 8,
	    'billing_address_id' => 4,
	    'shipping_address_id' => 4,
	    'slug' => 'hwfFDHEHTY7HIJCGD3f5E0sfCuWUPlnB',
	    'status' => 'open',
	    'subtotal' => 3517,
	    'tax_rate' => 700,
	    'tax' => 105,
	    'shipping' => 0,
	    'total' => 3622,
	    'due_at' => \Carbon\Carbon::today(),
	    'notes' => 'Thanks Madre!',
	]);

	$invoice3->addItem('Domain Registration: NURSES4CHANGE.ORG', '1-Year; Expires July 9, 2019', 2017);
	$invoice3->addItem('Basic Hosting Plan - Annual', '1-Year; Expires July 9, 2019', 6000);
	$invoice3->addItem('Loyal Customer Discount', 'Thanks for being a loyal customer.', -4500);
	
        // Schows hosting
	$invoice4 = factory(App\Models\Invoice::class)->create([
	    'type' => 'invoice',
	    'account_id' => 1,
	    'customer_id' => 6,
	    'billing_address_id' => 5,
	    'shipping_address_id' => 5,
	    'slug' => 'BmlNX9CMMBSaCwj4CnOnnx94rl4Jwe3e',
	    'status' => 'open',
	    'subtotal' => 11068,
	    'tax_rate' => 700,
	    'tax' => 210,
	    'shipping' => 0,
	    'total' => 11278,
	    'due_at' => \Carbon\Carbon::today(),
	    'notes' => 'Carl, I went ahead and included invoicing for all your domains.  If you rather spread these out instead of deal with them all at once, let me know and I can adjust the paperwork.  Thanks for your continued support.',
	]);

	$invoice4->addItem('Domain Registration: ANTIQUARIANS.CO', '1-Year; Expires February, 5, 2019', 3517);
	$invoice4->addItem('Domain Registration: CHATTANOOGAANTIQUES.COM', '1-Year; Expires September, 15, 2019', 1517);
	$invoice4->addItem('Domain Registration: CHATTANOOGAESTATESALES.COM', '1-Year; Expires September, 26, 2019', 1517);
	$invoice4->addItem('Domain Registration: SCHOWSESTATESALES.COM', '1-Year; Expires April, 18, 2019', 1517);
	$invoice4->addItem('Basic Hosting Plan - Annual', '1-Year; Expires February, 5, 2019', 6000);
	$invoice4->addItem('Basic SSL Certificate - Annual', '1-Year; Expires February, 5, 2019', 1500);
	$invoice4->addItem('Loyal Customer Discount', 'Thanks for being a loyal customer.', -4500);

	// Test
	$invoice5 = factory(App\Models\Invoice::class)->create([
	    'type' => 'invoice',
	    'account_id' => 1,
	    'customer_id' => 1,
	    'billing_address_id' => 3,
	    'shipping_address_id' => 3,
	    'status' => 'open',
	    'subtotal' => 100,
	    'tax_rate' => 700,
	    'tax' => 0,
	    'shipping' => 0,
	    'total' => 100,
	    'due_at' => \Carbon\Carbon::today(),
	    'notes' => 'Test!',
	]);

	$invoice5->addItem('Test Item', 'Fingers Crossed', 100 );

	$payment1 = factory(App\Models\Transaction::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'account_id' => 1,
	    'customer_id' => 1,
	    'invoice_id' => $invoice5->id,
	    'type' => 'payment',
	    'reference_number' => 'Visa *4268',
	    'total' => 100,
	    'notes' => null,
	    'created_at' => '2018-07-24 18:33:16',
	    'updated_at' => '2018-07-24 18:33:16',
	    'deleted_at' => null,
	]);

	$payment2 = factory(App\Models\Transaction::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'account_id' => 1,
	    'customer_id' => 6,
	    'invoice_id' => $invoice4->id,
	    'type' => 'payment',
	    'reference_number' => 'Visa *1280',
	    'total' => 11278,
	    'notes' => null,
	    'created_at' => '2018-07-27 00:45:28',
	    'updated_at' => '2018-07-27 00:45:28',
	    'deleted_at' => null,
	]);

	$payment3 = factory(App\Models\Transaction::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'account_id' => 1,
	    'customer_id' => 6,
	    'invoice_id' => $invoice1->id,
	    'type' => 'payment',
	    'reference_number' => 'Visa *1280',
	    'total' => 37985,
	    'notes' => null,
	    'created_at' => '2018-07-27 00:46:09',
	    'updated_at' => '2018-07-27 00:46:09',
	    'deleted_at' => null,
	]);

    }
}
