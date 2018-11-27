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
	    RolesTableSeeder::class,
	    TypesTableSeeder::class,
	    NamesTableSeeder::class,
            CountriesTableSeeder::class,
	    ProvincesTableSeeder::class,
	    CitiesTableSeeder::class,
	    AddressesTableSeeder::class,
            ServersTableSeeder::class,	
            TldsTableSeeder::class,
	    DomainsTableSeeder::class,
	    WebsitesTableSeeder::class,
	    ZonesTableSeeder::class,
	    MailboxesTableSeeder::class,
	    AliasesTableSeeder::class,
	    StatusChecksTableSeeder::class,	    
	    OrganizationsTableSeeder::class,
	    ContactsTableSeeder::class,	    
	    AccountsTableSeeder::class,
            CustomersTableSeeder::class,
	    ProductsTableSeeder::class,
	    InvoicesTableSeeder::class,
	    TransactionsTableSeeder::class,
	    CategoriesTableSeeder::class,	    
	    PostsTableSeeder::class,
	    TornSeeder::class,
	    IssuesTableSeeder::class,
	    EventsTableSeeder::class,
	    GameSeeder::class,
	]);
    }
}
