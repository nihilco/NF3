<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$payment1 = factory(App\Models\Transaction::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'account_id' => 1,
	    'customer_id' => 1,
	    'invoice_id' => 5,
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
	    'invoice_id' => 4,
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
	    'invoice_id' => 1,
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
