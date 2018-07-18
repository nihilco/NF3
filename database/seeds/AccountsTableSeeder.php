<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(App\Models\Account::class)->create([
	    'type' => 'live',
	    'name' => 'The Shirlock Foundation',
            'description' => 'Connected Stripe live account for The Shirlock Foundation.',
            'stripe_id' => env('STRIPE_SHIRLOCK_ACCOUNT'),
            'secret_key' => encrypt(env('STRIPE_SHIRLOCK_LIVE_SECRET')),
            'publishable_key' => env('STRIPE_SHIRLOCK_LIVE_PUBLISHABLE'),
	    'active' => true,
	]);

	//
	factory(App\Models\Account::class)->create([
            'type' => 'live',
            'name' => 'The Taraloka Foundation',
            'description' => 'Connected Stripe live account for The Taraloka FOundation.',
            'stripe_id' => env('STRIPE_TARALOKA_ACCOUNT'),
            'secret_key' => encrypt(env('STRIPE_TARALOKA_LIVE_SECRET')),
            'publishable_key' => env('STRIPE_TARALOKA_LIVE_PUBLISHABLE'),
	    'active' => true,
        ]);

	//
        factory(App\Models\Account::class)->create([
            'type' => 'live',
            'name' => 'Blue Springs Historical Association',
            'description' => 'Connected Stripe account for The Blue Springs Historical Association.',
            'stripe_id' => env('STRIPE_BLUESPRINGS_ACCOUNT'),
            'secret_key' => encrypt(env('STRIPE_BLUESPRINGS_LIVE_SECRET')),
            'publishable_key' => env('STRIPE_BLUESPRINGS_LIVE_PUBLISHABLE'),
	    'active' => true,
        ]);													
    }
}
