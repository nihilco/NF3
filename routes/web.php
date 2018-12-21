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
  if(config('app')['website'])
  {
    if(!config('app')['website']->under_construction) {
      return view('default.index');
    }
    if(!auth()->guest()) {
      return redirect()->route('dashboard');
    }
  }

  return view('layouts.construction');
});

//
// AUTH ROUTES
//
Route::name('login')->get('/login', 'SessionsController@create');
Route::post('login', 'SessionsController@store');
Route::name('logout')->post('/logout', 'SessionsController@destroy');
Route::name('register')->get('/register', 'RegistrationController@create');
Route::name('signup')->get('/signup', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
Route::post('signup', 'RegistrationController@store');
Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');

//
//
//
Route::name('dashboard')->get('/dashboard', 'DashboardController@index');
Route::name('store')->get('/store', 'StoreController@index');
Route::name('content')->get('/content', 'ContentController@index');
Route::name('library')->get('/library', 'LibraryController@index');
Route::name('forums')->get('/forums', 'ForumsController@index');
Route::name('support')->get('/support', 'SupportController@index');
Route::name('system')->get('/system', 'SystemController@index');
Route::name('system')->get('/settings', 'SettingsController@index');

//
//
//
Route::name('contact')->get('contact', 'ContactController@create');
Route::get('contact/list', 'ContactController@list');
Route::get('contact/{issue}', 'ContactController@show');
Route::post('contact', 'ContactController@store');

//
//
//
Route::get('representatives', 'RepresentativesController@index');
Route::get('representatives/this-year', 'RepresentativesController@thisyear');
Route::get('representatives/last-year', 'RepresentativesController@lastyear');
Route::get('representatives/register', 'RepresentativesController@create');
Route::post('representatives/register', 'RepresentativesController@store');

//
//  RESOURCE ROUTES
//
Route::get('accounts/list', 'AccountsController@list');
Route::resource('accounts', 'AccountsController');
Route::get('addresses/list', 'AddressesController@list');
Route::resource('addresses', 'AddressesController');
Route::get('aliases/list', 'AliasesController@list');
Route::resource('aliases', 'AliasesController');
Route::get('authors/list', 'AuthorsController@list');
Route::resource('authors', 'AuthorsController');
Route::get('cases/list', 'LegalCasesController@list');
Route::resource('cases', 'LegalCasesController');
Route::get('categories/list', 'CategoriesController@list');
Route::resource('categories', 'CategoriesController');
Route::get('cities/list', 'CitiesController@list');
Route::resource('cities', 'CitiesController');
Route::get('clients/list', 'CustomersController@list');
Route::resource('clients', 'CustomersController');
Route::get('contacts/list', 'ContactsController@list');
Route::resource('contacts', 'ContactsController');
Route::get('countries/list', 'CountriesController@list');
Route::resource('countries', 'CountriesController');
Route::get('customers/list', 'CustomersController@list');
Route::resource('customers', 'CustomersController');
Route::get('domains/list', 'DomainsController@list');
Route::resource('domains', 'DomainsController');
Route::get('emails/list', 'EmailsController@list');
Route::resource('emails', 'EmailsController');
Route::get('events/list', 'EventsController@list');
Route::resource('events', 'EventsController');
Route::get('invoice-items/list', 'InvoiceItemsController@list');
Route::resource('invoice-items', 'InvoiceItemsController');
Route::get('invoices/{invoice}/pay', 'PayInvoiceController@index');
Route::post('invoices/{invoice}/pay', 'PayInvoiceController@store');
Route::get('invoices/list', 'InvoicesController@list');
Route::resource('invoices', 'InvoicesController');
Route::get('issues/list', 'IssuesController@list');
Route::resource('issues', 'IssuesController');
Route::get('libraries/list', 'LibrariesController@list');
Route::resource('libraries', 'LibrariesController');
Route::get('links/list', 'LinksController@list');
Route::resource('links', 'LinksController');
Route::get('mailboxes/list', 'MailboxesController@list');
Route::resource('mailboxes', 'MailboxesController');
Route::get('names/list', 'NamesController@list');
Route::resource('names', 'NamesController');
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
Route::get('participants/list', 'ParticipantsController@list');
Route::resource('participants', 'ParticipantsController');
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
Route::get('roles/list', 'RolesController@list');
Route::resource('roles', 'RolesController');
Route::get('servers/list', 'ServersController@list');
Route::resource('servers', 'ServersController');
Route::get('status-checks/list', 'StatusChecksController@list');
Route::resource('status-checks', 'StatusChecksController');
Route::get('tags/list', 'TagsController@list');
Route::resource('tags', 'TagsController');
Route::get('tasks/list', 'TasksController@list');
Route::resource('tasks', 'TasksController');
Route::get('threads/list', 'ThreadsController@list');
Route::resource('threads', 'ThreadsController');
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

//
//  TORN ROUTES
//
Route::namespace('Torn')->prefix('torn')->group(function () {

    Route::get('attacks/list', 'AttacksController@list');
    Route::resource('attacks', 'AttacksController');
    Route::get('chains/list', 'ChainsController@list');
    Route::resource('chains', 'ChainsController');
    Route::get('companies/list', 'CompaniesController@list');
    Route::resource('companies', 'CompaniesController');
    Route::get('factions/list', 'FactionsController@list');
    Route::resource('factions', 'FactionsController');
    Route::get('hunts/list', 'HuntsController@list');
    Route::resource('hunts', 'HuntsController');
    Route::get('items/list', 'ItemsController@list');
    Route::resource('items', 'ItemsController');    
    Route::get('networths/list', 'NetworthsController@list');
    Route::resource('networths', 'NetworthsController');
    Route::get('players/list', 'PlayersController@list');
    Route::resource('players', 'PlayersController');    

});

//
//  GAME ROUTES
//
Route::namespace('Game')->prefix('game')->group(function () {
    Route::get('activities/list', 'ActivitiesController@list');
    Route::resource('activities', 'ActivitiesController');
    Route::get('items/list', 'ItemsController@list');
    Route::resource('items', 'ItemsController');    
    Route::get('players/list', 'PlayersController@list');
    Route::resource('players', 'PlayersController');
    Route::get('skills/list', 'SkillsController@list');
    Route::resource('skills', 'SkillsController');
    Route::get('stats/list', 'StatsController@list');
    Route::resource('stats', 'StatsController');    
});




Route::get('send-test-email', function(){
    //Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message) {
    //    $message->subject('Mailgun and Laravel are awesome!');
    //    $message->sender('no-reply@nihilframework.com', 'NIHIL Framework');
    //	  $message->from('no-reply@nihilframework.com', 'NIHIL Framework');
    //    $message->to('uriah@nihil.co');
    //});
    //Mail::to('uriah@nihil.co')
    //Mail::to('annenexum@gmail.com')
        //->send(new \App\Mail\UserRegistered(\App\Models\User::find(1)));
        //->send(new \App\Mail\FairInvitation());    
});

Route::get('/mailable', function () {
    //$user = \App\Models\User::find(1);
    //$event = \App\Models\Event::find(4);
    //$charge = new \Stripe\Charge();
    $contact = \App\Models\Contact::find(1);

    //return new \App\Mail\Fair\Registered($event, $user, $charge, 1, 'yes');
    return new \App\Mail\Fair\ColdCall();    
});

Route::get('/testing', function () {

$emails = [
'rwest@agnesscott.edu',
'kpiet@uab.edu',
'mathompson@albion.edu',
'apowell@allegheny.edu',
'kayla@american.edu',
'latonpd@appstate.edu',
'kaity.scanlan@asbury.edu',
'scottjd@apsu.edu',
'garmbrus@bard.edu',
'sami_bull@baylor.edu',
'stovers@beloit.edu',
'cbradham@Berry.edu',
'wielgus@bc.edu',
'mpc7290@bu.edu',
'mhubbard1@brenau.edu',
'david.volrath@brevard.edu',
'admissions@bryan.edu',
'lauren.rambo@bucknell.edu',
'cbobb@butler.edu',
'rdietert@ucsd.edu',
'collegefairs@carleton.edu',
'jpogue1@andrew.edu',
'raeanndibaggio@case.edu',
'laburch@catawba.edu',
'lcarleton@centenary.edu',
'keanna.reyes@ucf.edu',
'dacrowe1@cofc.edu',
'asmedbe@clemson.edu',
'dldoss@coastal.edu',
'hbinelli@colgate.edu',
'brad.kloha@colorado.edu',
'sam@colum.edu',
'Jennifer.barksdale@converse.edu',
'kkehner1@udayton.edu',
'park@denison.edu',
'marshalladams@depauw.edu',
'cteare@drew.edu',
'jrd349@drexel.edu',
'grantan@earlham.edu',
'FeLisa.Wilson@eku.edu',
'connorjf@eckerd.edu',
'jpetrizzi@elon.edu',
'fjerman@emory.edu',
'frierson@erskine.edu',
'jt65@evansville.edu',
'salbano@flagler.edu',
];

$emails = [
'uriah@nihil.co',
'mclemmer@gmail.com',
];

foreach($emails as $email)
{

    //Mail::to($email)
    //    ->send(new \App\Mail\Fair\ColdCall());

}

});

Route::get('{slug}', function ($slug) {

    // 1 - Blade file in them directory
    // 2 - Database page for website
    // 3 - Default blade file
    // 4 - Default database page
    // 5 - Page not found
    if(View::exists('pages.' . $slug)) {
        return view('pages.' . $slug);
    }else{
        abort(404);
    }

});