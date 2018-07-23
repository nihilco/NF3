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
    return view('layouts.construction');
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
Route::get('countries/list', 'CountriesController@list');
Route::resource('countries', 'CountriesController');
Route::get('customers/list', 'CustomersController@list');
Route::resource('customers', 'CustomersController');
Route::get('domains/list', 'DomainsController@list');
Route::resource('domains', 'DomainsController');
Route::get('invoice-items/list', 'InvoiceItemsController@list');
Route::resource('invoice-items', 'InvoiceItemsController');
Route::get('invoices/list', 'InvoicesController@list');
Route::resource('invoices', 'InvoicesController');
Route::get('provinces/list', 'ProvincesController@list');
Route::resource('provinces', 'ProvincesController');
Route::get('records/list', 'RecordsController@list');
Route::resource('records', 'RecordsController');
Route::get('servers/list', 'ServersController@list');
Route::resource('servers', 'ServersController');
Route::get('/tlds/list', 'TldsController@list');
Route::resource('tlds', 'TldsController');
Route::get('/transactions/list', 'TransactionsController@list');
Route::resource('transactions', 'TransactionsController');
Route::get('users/list', 'UsersController@list');
Route::resource('users', 'UsersController');
Route::get('websites/list', 'WebsitesController@list');
Route::resource('websites', 'WebsitesController');
Route::get('zones/list', 'ZonesController@list');
Route::resource('zones', 'ZonesController');