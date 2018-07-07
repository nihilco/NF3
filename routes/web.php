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

Route::get('/', function () {
    return view('layouts.construction');
});

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
Route::resource('accounts', 'AccountsController');
Route::resource('customers', 'CustomersController');
Route::resource('domains', 'DomainsController');
Route::resource('records', 'RecordsController');
Route::resource('servers', 'ServersController');
Route::resource('tlds', 'TldsController');
Route::resource('users', 'UsersController');
Route::resource('websites', 'WebsitesController');
Route::resource('zones', 'ZonesController');