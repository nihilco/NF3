<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//
Route::group(['middleware' => 'auth:api'], function() {
    Route::resource('accounts', 'AccountsController');
    Route::resource('customers', 'CustomersController');
    Route::resource('domains', 'DomainsController');
    Route::resource('records', 'RecordsController');
    Route::resource('servers', 'ServersController');
    Route::resource('tlds', 'TldsController');
    Route::resource('users', 'UsersController');
    Route::resource('websites', 'WebsitesController');
    Route::resource('zones', 'ZonesController');
});
