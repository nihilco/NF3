<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
	$this->call(ProvincesTableSeeder::class);
	$this->call(AccountsTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
	$this->call(BillingSeeder::class);
        $this->call(ServersTableSeeder::class);	
        $this->call(TldsTableSeeder::class);
	$this->call(DomainsTableSeeder::class);
	$this->call(WebsitesTableSeeder::class);
	$this->call(ZonesTableSeeder::class);
	$this->call(PostsTableSeeder::class);
	$this->call(CategoriesTableSeeder::class);
    }
}
