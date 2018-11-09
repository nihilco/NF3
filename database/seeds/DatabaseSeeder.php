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
        $this->call([
	    UsersTableSeeder::class,
            CountriesTableSeeder::class,
	    ProvincesTableSeeder::class,
	    CitiesTableSeeder::class,
	    AddressesTableSeeder::class,
	    OrganizationsTableSeeder::class,
	    AccountsTableSeeder::class,
            CustomersTableSeeder::class,
	    BillingSeeder::class,
            ServersTableSeeder::class,	
            TldsTableSeeder::class,
	    DomainsTableSeeder::class,
	    WebsitesTableSeeder::class,
	    ZonesTableSeeder::class,
	    MailboxesTableSeeder::class,
	    AliasesTableSeeder::class,
	    StatusChecksTableSeeder::class,
	    CategoriesTableSeeder::class,	    
	    PostsTableSeeder::class,
	    TornSeeder::class,
	    SupportSeeder::class,
	    ContactsTableSeeder::class,
	    EventsTableSeeder::class,
	]);
    }
}
