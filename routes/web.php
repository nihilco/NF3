<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::name('home')->get('/', function () {
  if(!config('app.website')->under_construction) {
    return view('default.index');
  } else {
    return view('layouts.construction');
  }
});

//
Route::name('login')->get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::name('logout')->post('/logout', 'SessionsController@destroy');
Route::name('register')->get('/register', 'RegistrationController@create');
Route::name('signup')->get('/signup', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::post('/signup', 'RegistrationController@store');
//
Route::name('dashboard')->get('dashboard', 'DashboardController@index');
Route::name('store')->get('store', 'StoreController@index');
Route::name('content')->get('content', 'ContentController@index');
Route::name('media')->get('media', 'MediaController@index');
Route::name('library')->get('library', 'LibraryController@index');
Route::name('forums')->get('forums', 'ForumsController@index');
Route::name('support')->get('support', 'SupportController@index');
Route::name('system')->get('system', 'SystemController@index');
//
Route::get('accounts/list', 'AccountsController@list');
Route::resource('accounts', 'AccountsController');
Route::get('addresses/list', 'AddressesController@list');
Route::resource('addresses', 'AddressesController');
Route::get('aliases/list', 'AliasesController@list');
Route::resource('aliases', 'AliasesController');
Route::get('attacks/list', 'AttacksController@list');
Route::resource('attacks', 'AttacksController');
Route::get('authors/list', 'AuthorsController@list');
Route::resource('authors', 'AuthorsController');
Route::get('categories/list', 'CategoriesController@list');
Route::resource('categories', 'CategoriesController');
Route::get('chains/list', 'ChainsController@list');
Route::resource('chains', 'ChainsController');
Route::get('cities/list', 'CitiessController@list');
Route::resource('cities', 'CitiesController');
Route::get('companies/list', 'CompaniesController@list');
Route::resource('companies', 'CompaniesController');
Route::get('countries/list', 'CountriesController@list');
Route::resource('countries', 'CountriesController');
Route::get('customers/list', 'CustomersController@list');
Route::resource('customers', 'CustomersController');
Route::get('domains/list', 'DomainsController@list');
Route::resource('domains', 'DomainsController');
Route::get('emails/list', 'EmailsController@list');
Route::resource('emails', 'EmailsController');
Route::get('factions/list', 'FactionsController@list');
Route::resource('factions', 'FactionsController');
Route::get('hunts/list', 'HuntsController@list');
Route::resource('hunts', 'HuntsController');
Route::get('invoice-items/list', 'InvoiceItemsController@list');
Route::resource('invoice-items', 'InvoiceItemsController');
Route::get('invoices/{invoice}/pay', 'PayInvoiceController@index');
Route::post('invoices/{invoice}/pay', 'PayInvoiceController@store');
Route::get('invoices/list', 'InvoicesController@list');
Route::resource('invoices', 'InvoicesController');
Route::get('libraries/list', 'LibrariesController@list');
Route::resource('libraries', 'LibrariesController');
Route::get('mailboxes/list', 'MailboxesController@list');
Route::resource('mailboxes', 'MailboxesController');
Route::get('names/list', 'NamesController@list');
Route::resource('names', 'NamesController');
Route::get('networths/list', 'NetworthsController@list');
Route::resource('networths', 'NetworthsController');
Route::get('obituaries/list', 'ObituariesController@list');
Route::resource('obituaries', 'ObituariesController');
Route::get('order-items/list', 'OrderItemsController@list');
Route::resource('order-items', 'OrderItemsController');
Route::get('orders/list', 'OrdersController@list');
Route::resource('orders', 'OrdersController');
Route::get('organizations/list', 'OrganizationsController@list');
Route::resource('organizations', 'OrganizationsController');
Route::get('pages/list', 'PagesController@list');
Route::resource('pages', 'PagesController');
Route::get('posts/list', 'PostsController@list');
Route::resource('posts', 'PostsController');
Route::get('products/list', 'ProductsController@list');
Route::resource('products', 'ProductsController');
Route::name('profile')->get('profile', 'ProfilesController@index');
Route::get('profiles/{user}', 'ProfilesController@show');
Route::get('provinces/list', 'ProvincesController@list');
Route::resource('provinces', 'ProvincesController');
Route::get('publications/list', 'PublicationsController@list');
Route::resource('publications', 'PublicationsController');
Route::get('ratings/list', 'RatingsController@list');
Route::resource('ratings', 'RatingsController');
Route::get('records/list', 'RecordsController@list');
Route::resource('records', 'RecordsController');
Route::get('replies/list', 'RepliesController@list');
Route::resource('replies', 'RepliesController');
Route::get('servers/list', 'ServersController@list');
Route::resource('servers', 'ServersController');
Route::get('status-checks/list', 'StatusChecksController@list');
Route::resource('status-checks', 'StatusChecksController');
Route::get('tags/list', 'TagsController@list');
Route::resource('tags', 'TagsController');
Route::get('threads/list', 'ThreadsController@list');
Route::resource('threads', 'ThreadsController');
Route::get('tickets/list', 'TicketsController@list');
Route::resource('tickets', 'TicketsController');
Route::get('/tlds/list', 'TldsController@list');
Route::resource('tlds', 'TldsController');
Route::get('/transactions/list', 'TransactionsController@list');
Route::resource('transactions', 'TransactionsController');
Route::get('types/list', 'TypesController@list');
Route::resource('types', 'TypesController');
Route::get('users/list', 'UsersController@list');
Route::resource('users', 'UsersController');
Route::get('views/list', 'ViewsController@list');
Route::resource('views', 'ViewsController');
Route::get('votes/list', 'VotesController@list');
Route::resource('votes', 'VotesController');
Route::get('websites/list', 'WebsitesController@list');
Route::resource('websites', 'WebsitesController');
Route::get('works/list', 'WorksController@list');
Route::resource('works', 'WorksController');
Route::get('zones/list', 'ZonesController@list');
Route::resource('zones', 'ZonesController');