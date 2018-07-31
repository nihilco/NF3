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
        $provinces = App\Models\Province::all();
	$countries = App\Models\Country::all();
	$users = App\Models\User::all();
	
	//
	$address1 = factory(App\Models\Address::class)->create([
	    'owner_id' => $users->where('email', 'uriah@nihil.co')->first()->id,
	    'name' => 'Uriah M. Clemmer IV',
	    'address1' => '6409 Sail Pointe Lane',
	    'city' => 'Hixson',
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37343',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	//
	$address2 = factory(App\Models\Address::class)->create([
	    'owner_id' => $users->where('email', 'uriah@nihil.co')->first()->id,
	    'name' => 'Uriah M. Clemmer IV',
	    'address1' => '855 Tremont Ave',
	    'city' => 'Lexington',
	    'province_id' => $provinces->where('code', 'KY')->first()->id,
	    'postal_code' => '40502',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	//
	$address3 = factory(App\Models\Address::class)->create([
	    'owner_id' => $users->where('email', 'uriah@nihil.co')->first()->id,
	    'name' => 'Uriah M. Clemmer IV',
	    'address1' => '1897 Combs Road',
	    'address2' => 'Apt #1',
	    'city' => 'Hazard',
	    'province_id' => $provinces->where('code', 'KY')->first()->id,
	    'postal_code' => '41701',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	//
	$address4 = factory(App\Models\Address::class)->create([
	    'owner_id' => $users->where('email', 'nancyclemmer@me.com')->first()->id,
	    'name' => 'Nancy Clemmer',
	    'address1' => '2773 Haywood Avenue',
	    'city' => 'Chattanooga',
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37415',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	//
	$address5 = factory(App\Models\Address::class)->create([
	    'owner_id' => $users->where('email', 'carlschow@gmail.com')->first()->id,
	    'name' => 'Schows\' Estate Sales',
	    'address1' => '956 Signal Road',
	    'address2' => 'ATTN: Carl Schow',
	    'city' => 'Signal Mountain',
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37377',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	//
	$address6 = factory(App\Models\Address::class)->create([
	    'owner_id' => $users->where('email', 'chandler@mazestonelaw.com')->first()->id,
	    'name' => 'Maze & Stone, PLLC',
	    'address1' => '127 West High Street',
	    'address2' => 'ATTN: Chandler Maze',
	    'city' => 'Mount Sterling',
	    'province_id' => $provinces->where('code', 'KY')->first()->id,
	    'postal_code' => '40353',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	//
	$address7 = factory(App\Models\Address::class)->create([
	    'owner_id' => $users->where('email', 'mclemmer@gmail.com')->first()->id,
	    'name' => 'Uriah M. Clemmer IV',
	    'address1' => '6409 Sail Pointe Lane',
	    'city' => 'Hixson',
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37343',
	    'country_id' => $countries->where('code', 'US')->first()->id,
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

    }
}
