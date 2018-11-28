<?php

use Illuminate\Database\Seeder;

class TestAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	\Stripe\Stripe::setApiKey(env('STRIPE_PLATFORM_TEST_SECRET'));

	$stripeAccounts = \Stripe\Account::all();

	foreach($stripeAccounts as $stripeAccount) {
	    dd($stripeAccount);
	}

	$testAccounts = [
	    [
	        'email' => 'test@nihil.co',
	        'name' => 'The Shirlock Foundation',
		'description' => 'Connected Stripe test account for The Shirlock Foundation.',
	    ],
	    [
	        'email' => 'test@nihil.co',
	        'name' => 'The Taraloka Foundation',
		'description' => 'Connected Stripe test account for The Taraloka Foundation.',
	    ],
	    [
	        'email' => 'test@nihil.co',
	        'name' => 'Maze & Stone Law, PLLC.',
		'description' => 'Connected Stripe test account for Maze & Stone Law, PLLC.',
	    ],
	];

	foreach($testAccounts as $testAccount) {

	    $stripeAccount = \Stripe\Account::create([
	        'type' => 'custom',
		'country' => 'US',
		'email' => $testAccount['email'],
		'business_name' => $testAccount['name'],
	    ]);

	    factory(App\Models\Account::class)->create([
	        'type' => 'test',
		'name' => $testAccount['name'],
		'description' => $testAccount['description'],
		'stripe_id' => $stripeAccount->id,
		'secret_key' => $stripeAccount->keys->secret,
		'publishable_key' => $stripeAccount->keys->publishable,
		'active' => true,
	    ]);
	}
    }
}
