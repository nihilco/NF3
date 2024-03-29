<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$accounts = App\Models\Account::all();
	$users = App\Models\User::all();

	//
	factory(App\Models\Customer::class)->create([
	    'account_id' => 1,
	    'owner_id' => $users->where('email', 'uriah@nihil.co')->first()->id,
	    'stripe_id' => 'cus_DI5RsqF6du6HgE',
	]);

        //
	factory(App\Models\Customer::class)->create([
	    'account_id' => 1,
	    'owner_id' => $users->where('email', 'kgribbin2@gmail.com')->first()->id,
	    'stripe_id' => 'cus_CIePHq4N90im90',
	]);

	//
	factory(App\Models\Customer::class)->create([
	    'account_id' => 1,
	    'owner_id' => $users->where('email', 'ataylor@baylorschool.org')->first()->id,
	    'stripe_id' => 'cus_9sjqjkFENJxt7w',
	]);

	//
	factory(App\Models\Customer::class)->create([
	    'account_id' => 1,
	    'owner_id' => $users->where('email', 'wray@caseantiques.com')->first()->id,
	    'stripe_id' => 'cus_8VkSJtV14GjI2p',
	]);

	//
	factory(App\Models\Customer::class)->create([
	    'account_id' => 1,
	    'owner_id' => $users->where('email', 'ben.hollerbach@gmail.com')->first()->id,
	    'stripe_id' => 'cus_7GyxMbgtRkcfLg',
	]);

	//
	factory(App\Models\Customer::class)->create([
	    'account_id' => 1,
	    'owner_id' => $users->where('email', 'carlschow@gmail.com')->first()->id,
	    'stripe_id' => 'cus_6xVe9WKzpBhTaA',
	]);

	//
	factory(App\Models\Customer::class)->create([
	    'account_id' => 1,
	    'owner_id' => $users->where('email', 'chadegary@gmail.com')->first()->id,
	    'stripe_id' => 'cus_5wXTVoB02GP2uw',
	]);

	//
	factory(App\Models\Customer::class)->create([
	    'account_id' => 1,
	    'owner_id' => $users->where('email', 'nancyclemmer@me.com')->first()->id,
	    'stripe_id' => 'cus_DHfeeiu54TQDSd',
	]);

	//
	factory(App\Models\Customer::class)->create([
	    'account_id' => 1,
	    'owner_id' => $users->where('email', 'chandler@mazestonelaw.com')->first()->id,
	    'stripe_id' => 'cus_DHfpfF9QloGXEx',
	]);

	//
	factory(App\Models\Customer::class)->create([
	    'account_id' => 2,
	    'owner_id' => $users->where('email', 'nancyclemmer@me.com')->first()->id,
	    'stripe_id' => 'cus_DFsb7DRwpDRA2f',
	]);

    }
}
