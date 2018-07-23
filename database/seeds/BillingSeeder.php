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

	//
	$address = factory(App\Models\Address::class)->create([
	    'name' => 'Uriah M. Clemmer IV',
	    'address1' => '6409 Sail Pointe Lane',
	    'city' => 'Hixson',
	    'province_id' => $provinces->where('code', 'TN')->first()->id,
	    'postal_code' => '37343',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	//
	$address = factory(App\Models\Address::class)->create([
	    'name' => 'Uriah M. Clemmer IV',
	    'address1' => '855 Tremont Ave',
	    'city' => 'Lexington',
	    'province_id' => $provinces->where('code', 'KY')->first()->id,
	    'postal_code' => '40502',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

	//
	$address = factory(App\Models\Address::class)->create([
	    'name' => 'Uriah M. Clemmer IV',
	    'address1' => '1897 Combs Road',
	    'address2' => 'Apt #1',
	    'city' => 'Hazard',
	    'province_id' => $provinces->where('code', 'KY')->first()->id,
	    'postal_code' => '41701',
	    'country_id' => $countries->where('code', 'US')->first()->id,
	]);

        //
	$invoice = factory(App\Models\Invoice::class)->create([
	    'type' => 'invoice',
	    'account_id' => 1,
	    'customer_id' => 1,
	    'billing_address_id' => 1,
	    'shipping_address_id' => 1,
	    'subtotal' => 50000,
	    'tax_rate' => 700,
	    'tax' => 3500,
	    'shipping' => 0,
	    'total' => 53500,
	]);
    }
}
