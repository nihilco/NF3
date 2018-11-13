<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(App\Models\Product::class)->create([
	    'name' => 'Fair Registration',
	    'description' => 'Fair registration description.',
	    'price' => 15000,
	]);

        //
	factory(App\Models\Product::class)->create([
	    'name' => 'Additional Representative',
	    'description' => 'Additional representative description.',
	    'price' => 2500,
	]);

        //
	factory(App\Models\Product::class)->create([
	    'name' => 'Scanner',
	    'description' => 'Scannner description.',
	    'price' => 8000,
	]);
    }
}
