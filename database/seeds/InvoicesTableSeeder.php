<?php

use Illuminate\Database\Seeder;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$typesTypes = App\Models\Type::where('grouping', App\Models\Invoice::class . ":Type")->get();
	$typesStatuses = App\Models\Type::where('grouping', App\Models\Invoice::class . ":Status")->get();		

        // Schows website
	$invoice1 = factory(App\Models\Invoice::class)->create([
	    'type_id' => $typesTypes->where('name', 'Invoice')->first()->id,
	    'account_id' => 1,
	    'customer_id' => 6,
	    'billing_contact_id' => 6,
	    'shipping_contact_id' => 6,
	    'slug' => 'sFPeZ2BTbVqznM21znz994MKTa4whped',
	    'status_type_id' => $typesStatuses->where('name', 'Paid')->first()->id,
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
	    'type_id' => $typesTypes->where('name', 'Invoice')->first()->id,
	    'account_id' => 1,
	    'customer_id' => 9,
	    'billing_contact_id' => 9,
	    'shipping_contact_id' => 9,
	    'slug' => '9Q31ZU2mU7TOGh8YwoD2CR2rxc9FUGJy',
	    'status_type_id' => $typesStatuses->where('name', 'Paid')->first()->id,
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
	    'type_id' => $typesTypes->where('name', 'Invoice')->first()->id,
	    'account_id' => 1,
	    'customer_id' => 8,
	    'billing_contact_id' => 8,
	    'shipping_contact_id' => 8,	    
	    'slug' => 'hwfFDHEHTY7HIJCGD3f5E0sfCuWUPlnB',
	    'status_type_id' => $typesStatuses->where('name', 'Paid')->first()->id,
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
	    'type_id' => $typesTypes->where('name', 'Invoice')->first()->id,
	    'account_id' => 1,
	    'customer_id' => 6,
	    'billing_contact_id' => 6,
	    'shipping_contact_id' => 6,
	    'slug' => 'BmlNX9CMMBSaCwj4CnOnnx94rl4Jwe3e',
	    'status_type_id' => $typesStatuses->where('name', 'Paid')->first()->id,
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
	    'type_id' => $typesTypes->where('name', 'Invoice')->first()->id,
	    'account_id' => 1,
	    'customer_id' => 1,
	    'billing_contact_id' => 1,
	    'shipping_contact_id' => 1,
	    'status_type_id' => $typesStatuses->where('name', 'Open')->first()->id,
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
