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

$reps = [

'cutler@clemson.edu',
'KAAN@kenyon.edu',
'acrabtree@usfca.edu',
'penn@roanoke.edu',
'crutchd@juniata.edu',
'cschrider@leeuniversity.edu',
'glemost@millsaps.edu',
'jedbrech@samford.edu',
'harper.haynes@vanderbilt.edu',
'mmcmillan@oglethorpe.edu',
'lauren.robertson@ung.edu',
'avacsren@skidmore.edu',
'llabens@tulane.edu',
'admission@depauw.edu',
'Nichole.Poe@mtsu.edu',
'leh@uab.edu',
'ckercheval@wittenberg.edu',
'admissions@vt.edu',
'lfletch@aum.edu',
'ncook3@elon.edu',
'jmallard@georgiasouthern.edu',
'sharon.robbins@converse.edu',
'mamadm@rit.edu',
'swilliams@highpoint.edu',
'claire.hirte@covenant.edu',
'jnewcomer1@radford.edu',
'hatcher2@memphis.edu',
'fglitman@lynn.edu',
'jaye.west@msstate.edu',
'brownj2@queens.edu',
'LuszczykD@arcadia.edu',
'adm-hsc@uga.edu',
'edward.pickett@tufts.edu',
'Annette.Mollenkopf@kit.edu',
'Kinsey.miller@trinity.edu',
'gwadley@colum.edu',
'armstm10@erau.edu',
'wehanson319@gmail.com',
'tacallis@tntech.edu',
'ejdowney@loyno.edu',
'rsapough@piedmont.edu',
'cmcginness@hillsdale.edu',
'teverdow@king.edu',
'rlian@brenau.edu',
'lwburns@sewanee.edu',
'nanderson@ut.edu',
'castwellfider@southern.edu',
'benjamin.oxford@trincoll.edu',
'dacrowe1@cofc.edu',
'tyler@utk.edu',
'michael.waters@belmont.edu',
'hblanton@tusculum.edu',
'kkehner1@udayton.edu',
'askkatharine@missouri.edu',
'landon.parrish@lipscomb.edu',
'acembor@providence.edu',
'hshore@brandeis.edu',
'vlasisji@wfu.edu',
'fennertw@wofford.edu',
'rwest@agnesscott.edu',
'pbrogdon@wustl.edu',
'klee8@montevallo.edu',
'anna.thomason@uah.edu',
'boylan@american.edu',
'mimansuy@davidson.edu',
'miya.walker@miamioh.edu',
'nelor@oxy.edu',
'corleyle@mailbox.sc.edu',
'collegefairs@neu.edu',
'megwalu@nova.edu',
'dardenm@etsu.edu',
'bauld_d@mercer.edu',
'arichter@flsouthern.edu',
'brandi.ferrebee@goucher.edu',
'jjtaylor@olemiss.edu',
'anthony.davis@ccga.edu',
'bbeveridge@mcdaniel.edu',
'Lee-Pierce@utc.edu',
'lkeita@carleton.edu',
'admission@hamilton.edu',
'jensley@edsouth.org',
'tori.irvin@furman.edu',
'MLawhorn@xusom.com',
'mbreed10@earlham.edu',
'travel@coastal.edu',
'averittb@apsu.edu',
'lgwimpey@catawba.edu',
'will.brown@gcsu.edu',
'millershawn@hendrix.edu',
'park@denison.edu',
'kronischzi@guilford.edu',
'russellc@rhodes.edu',
'mhead7@kennesaw.edu',
'donna.sheehan@fandm.edu',
'coneil@berry.edu',
'vellinem@union.edu',
'gmassey@mca.edu',
'sandra.labrecque@ehl.ch',
'a.mwakisu@jacobs-university.de',
'rganand@emory.edu',
'mldaniel@smu.edu',
'ezuccher@bsc.edu',
'bradybe@hiwassee.edu',
'christian.montgomery@wku.edu',
'lfekete@cn.edu',
'troane@wooster.edu',
'amora01@daltonstate.edu',
'kmm0025@auburn.edu',
'ccoffey@ncobs.org',
'admissions@jsu.edu',
'stacy.hall@ua.edu',
'aliffmt@hollins.edu',
'mary.stewart@salem.edu',
'bachmanc@lafayette.edu',
'jsams@transy.edu',
'collegefairs@purdue.edu',
'jessica.yevicks@ie.edu',
'mpc7290@bu.edu',
'urrecruitmenttravel@richmond.edu',
'CCORP@BATES.EDU',
'cara.franke@uky.edu',
'katie-davis@utulsa.edu',
'maggiemae@warren-wilson.edu',
'chobanim@dickinson.edu',
'kristen.richards@usm.edu',
'acurrie@uu.edu',
'philip.taylor@lesroches-admissions.com',
'ocruger@bowdoin.edu',
'xan.roseberry@admission.gatech.edu',
'a.north@msstate.edu',
'mplourd@holycross.edu',
'jessica_krom@baylor.edu',
'jloveless@wpi.edu',
'fjones@scad.edu',
'kendra.montejos@centre.edu',
'tbyrne3@gmu.edu',
'abarrett@stlawu.edu',
'mbrown9855@bryan.edu',
'gpinkston@fhu.edu',
'mollienel@yahoo.com',
'enadeau@southalabama.edu',
'CSevier2@slu.edu',
'taylorb@lsu.edu',
'brad.carlyle@chattanoogastate.edu',
'eaustin@wlu.edu',
'kde4@lehigh.edu',
'masonnheller@uchicago.edu',
'esparks@utm.edu',
'Rowen@twcnet.edu',
'kmccuin@ju.edu',
'Kayla@rsm.org',
'lbrown9@una.edu',
'aj.kupec@assumption.edu',
'LorenzHE@wofford.edu',
'tyler@utk.edu',
'katie.morgan@auburn.edu',
'tori.irvin@furman.edu',
'lwburns@sewanee.edu',
'will.brown@gcsu.edu',
'mtyree@roanoke.edu',
'kpiet@uab.edu',
'ezuccher@bsc.edu',
'bbell@uu.edu',
'jaye.west@msstate.edu',
'anthony.davis@ccga.edu',
'fglitman@lynn.edu',
'adm-hsc@uga.edu',
'lauren.robertson@ung.edu',
'PNG0002@UAH.edu',
'kaluginata@missouri.edu',
'collegefairs@kenyon.edu',
'ccoffey@ncobs.org',
'wehanson319@gmail.com',
'Jesse.Mungin@marist.edu',
'harper.haynes@vanderbilt.edu',
'kimmy.hilson@jhu.edu',
'duncandj@etsu.edu',
'admissions@jsu.edu',
'jparker17@ju.edu',
'admissions@cortland.edu',
'asmedbe@clemson.edu',
'jerica.johnson@maryvillecollege.edu',
'slewis1@udayton.edu',
'admissions@vt.edu',
'sck7@lehigh.edu',
'bbrady@shorter.edu',
'admission@hamilton.edu',
'rstanbac@samford.edu',
'heather.zeman@simmons.edu',
'mlawhorn@xusom.com',
'tacallis@tntech.edu',
'gwadley@colum.edu',
'nelsona@apsu.edu',
'michael.waters@belmont.edu',
'kblanke1@montevallo.edu',
'kthayer@clarku.edu',
'tragland@cumberland.edu',
'ckercheval@wittenberg.edu',
'msteinbach@wesleyancollege.edu',
'mhamilton@carleton.edu',
'cdeatly@colgate.edu',
'brightonesmith@gmail.com',
'coneil@berry.edu',
'Deneen.brown@villanova.edu',
'swilliams@highpoint.edu',
'rynemc@uchicago.edu',
'mamadm@rit.edu',
'taylorb@lsu.edu',
'jennifer.barksdale@converse.edu',
'russellc@rhodes.edu',
'armstm10@erau.edu',
'cteare@drew.edu',
'mparker@leeuniversity.edu',
'collegefairs@ua.edu',
'hillh@hendrix.edu',
'katie-davis@utulsa.edu',
'mpc7290@bu.edu',
'kristen.richards@usm.edu',
'samizell@memphis.edu',
'rmclaughlin@southalabama.edu',
'miya.walker@miamioh.edu',
'dacrowe1@cofc.edu',
'bauld_d@mercer.edu',
'vlasisji@wfu.edu',
'a.north@msstate.edu',
'christian.montgomery@wku.edu',
'bbowles@scad.edu',
'lthoma49@utm.edu',
'Caitlin.Sadler@mtsu.edu',
'mldaniel@smu.edu',
'kemills@usfca.edu',
'amora01@daltonstate.edu',
'Annette.Gambach@kit.edu',
'ecoker@tusculum.edu',
'sandra.labrecque@ehl.ch',
'collegefairs@northeastern.edu',
'mcarter2@oglethorpe.edu',
'dnemer@skidmore.edu',
'baytopsr@dickinson.edu',
'liz.stark@case.edu',
'jbuhler@loyno.edu',
'jsams@transy.edu',
'jferguson@tnwesleyan.edu',
'rlian@brenau.edu',
'rganand@emory.edu',
'ncook3@elon.edu',
'loricrawford@sc.edu',
'bduncan@georgiasouthern.edu',
'Belen.VanDerWerth@ie.edu',
'nanderson@ut.edu',
'philip.taylor@lesroches-admissions.com',
'ogerardi@radford.edu',
'Brandon-Justice@utc.edu',
'acembor@providence.edu',
'ike.megwalu@nova.edu',
'benjamin.oxford@trincoll.edu',
'tye.menist@millsaps.edu',
'park@denison.edu',
'jbo78cp@gmail.com',
'larry.stokes@admission.gatech.edu',
'audrey.gauss@salem.edu',
'Giuffrida@marshall.edu',
'CSevier2@slu.edu',
'mimansuy@davidson.edu',
'urrecruitmentravel@richmond.edu',
'landon.parrish@lipscomb.edu',
'cara.franke@uky.edu',
'eaustin@wlu.edu',
'teaguemt2@hollins.edu',
'aande118@kennesaw.edu',
'alupo@hillsdale.edu',
'birda_lewis@wustl.edu',
'k.cantelou@gmail.com',
'maggie.brown@bryan.edu',
'llabens@tulane.edu',
'wellsme@vcu.edu',
'collegefairs@purdue.edu',
'travel@coastal.edu',
'erica.mitchell@cbu.edu',
'rivers@olemiss.edu',
'hoefler@lakeforest.edu',
'bljohnson@aii.edu',
'Demond.lester@aamu.edu',
'a.mwakisu@jacobs-university.de',
'chelsea.duncan@nyu.edu',
'nostramr@eckerd.edu',
'frantalove@gmail.com',
'dlester3@rustcollege.edu',
'lfekete@cn.edu',
'christian.smith@montreat.edu',
'nal56@drexel.edu',
'jensley@edsouth.org',
'dcorson@stevens.edu',
'brittany.smith@chattanoogastate.edu',
'frogmail@tcu.edu',
'JAK1@reinhardt.edu',
'didoss@comcast.net',
'branhamr@bethelu.edu',
'mnaughton@warren-wilson.edu',
'carly.c.stafford@ColoradoCollege.edu',
'Hannah.wilson@lmunet.edu',
'jmays@odu.edu',
'jessi.jenkins@gcsu.edu',
'kfowler@piedmont.edu',
'collegefairs@ua.edu',
'swilliams@highpoint.edu',
'heather.lorenz@furman.edu',
'Kayla@american.edu',
'adm-hsc@uga.edu',
'jsimpso2@samford.edu',
'kpiet@uab.edu',
'McLaughlin@southalabama.edu',
'bbell@uu.edu',
'hallam@dickinson.edu',
'will.brown@gcsu.edu',
'fglitman@lynn.edu',
'ccoffey@ncobs.org',
'lwburns@sewanee.edu',
'erik.vitolins@covenant.edu',
'marybeth.tift@vanderbilt.edu',
'mtyree@roanoke.edu',
'diallen@tntech.edu',
'mgroberts@king.edu',
'michael.waters@belmont.edu',
'landon.parrish@lipscomb.edu',
'collegefairs@kenyon.edu',
'sara.morency@centre.edu',
'Lee-Pierce@utc.edu',
'branhamr@bethelu.edu',
'caylor@ehc.edu',
'taylorb@lsu.edu',
'marybennett@valdosta.edu',
'duncandj@etsu.edu',
'anthony.davis@ccga.edu',
'lthoma49@utm.edu',
'memery@tusculum.edu',
'asmedbe@clemson.edu',
'eaustin@wlu.edu',
'Jaye.west@msstate.edu',
'audrey-crum@utulsa.edu',
'deneen.brown@villanova.edu',
'rynemc@uchicago.edu',
'pcarney@jwu.edu',
'ckercheval@earthlink.net',
'engler@montevallo.edu',
'nanderson@ut.edu',
'jerica.johnson@maryvillecollege.edu',
'JAK1@reinhardt.edu',
'ben.liebman@wku.edu',
'a.moss@tcu.edu',
'katie.morgan@auburn.edu',
'lcarville@hillsdale.edu',
'admissions@vt.edu',
'vlasisji@wfu.edu',
'miya.walker@miamioh.edu',
'a.north@msstate.edu',
'admissions@leeuniversity.edu',
'dacrowe1@cofc.edu',
'rwest@agnesscott.edu',
'katie.johnson@ung.edu',
'cteare@drew.edu',
'tyler@utk.edu',
'meredith.howard2013@gmail.com',
'jpetrizzi@elon.edu',
'edubois@watkins.edu',
'gking@iwu.edu',
'philip.taylor@lesroches-admissions.com',
'esdong@usfca.edu',
'amora01@daltonstate.edu',
'macgregor@presby.edu',
'jssaluti@syr.edu',
'Christy.Sevier@slu.edu',
'llabens@tulane.edu',
'slewis1@udayton.edu',
'erica.mitchell@cbu.edu',
'fjerman@emory.edu',
'stellerl@xavier.edu',
'mnaughton@warren-wilson.edu',
'edharris@loyno.edu',
'cconchar@gwu.edu',
'brownm@rhodes.edu',
'bduncan@georgiasouthern.edu',
'kmeadors@tnwesleyan.edu',
'collegefairs@purdue.edu',
'mhubbard1@brenau.edu',
'carly.c.stafford@coloradocollege.edu',
'bbowles@scad.edu',
'kphamilt@bsc.edu',
'Caitlin.Clough@mtsu.edu',
'collegefairs@northeastern.edu',
'urrecruitmenttravel@richmond.edu',
'lbrown9@una.edu',
'pricer@apsu.edu',
'kristen.richards@usm.edu',
'cbradham@berry.edu',
'marshalladams@depauw.edu',
'jwiesne@ju.edu',
'bauld_d@mercer.edu',
'dgingles@providence.edu',
'bianchae@lafayette.edu',
'askkatharine@missouri.edu',
'rwenzel@kennesaw.edu',
'lfekete@cn.edu',
'criles@tamu.edu',
'cymone.eldridge@converse.edu',
'bspicer@fisk.edu',
'paorr@davidson.edu',
'murrake@millsaps.edu',
'denisse.disla@ie.edu',
'travel@coastal.edu',
'xan.roseberry@admission.gatech.edu',
'hatcher2@memphis.edu',
'loren.wright@wustl.edu',
'hlginn@jsu.edu',
'crononha@mailbox.sc.edu',
'megg.obrien92@gmail.com',
'joshua.palmer@uky.edu',
'hoefler@lakeforest.edu',
'rivers@olemiss.edu',
'russellt@berea.edu',
'andrew.smith@bryan.edu',
'cbobb@butler.edu',
'nfhedden@yhc.edu',

];


$exclude = [
  'michael.waters@belmont.edu',
  'branhamr@bethelu.edu',
  'kphamilt@bsc.edu',
  'lfekete@cn.edu',
  'sara.morency@centre.edu',
  'anthony.davis@ccga.edu',
  'paorr@davidson.edu',
  'hallam@dickinson.edu',
  'will.brown@gcsu.edu',
  'pcarney@jwu.edu',
  'admissions@leeuniversity.edu',
  'jaye.west@msstate.edu',
  'ccoffey@ncobs.org',
  'mark.muenzer@rit.edu',
  'jsimpso2@samford.edu',
  'lwburns@sewanee.edu',
  'rotherr@southwestern.edu',
  'lmcgauvran@tntech.edu',
  'collegefairs@ua.edu',
  'bbell@uu.edu',
  'pwalsh.seg@gmail.com',
  'rynemc@uchicago.edu',
  'niamh.kavanagh@ul.ie',
  'engler@montevallo.edu',
  'lthoma49@utm.edu',
  'Marybennett@valdosta.edu',
  'marybeth.tift@vanderbilt.edu',
  'slytle@warren-wilson.edu',
  'jmayo@watkins.edu',
  'nfhedden@yhc.edu',
];

$reps = [
  //'uriah@nihil.co',
  //'mclemmer@gmail.com',
  //'annenexum@gmail.com',
];

$reps = [];

$reps = array_unique($reps);

$reps = array_diff($reps, $exclude);

$c = 0;

foreach($reps as $rep) {

    Mail::to($rep)
        ->send(new \App\Mail\Fair\Holiday());

    $c++;
    
}

return $c;

});

Route::get('/mailable', function () {
    $user = \App\Models\User::find(1);
    $event = \App\Models\Event::find(4);
    $charge = new \Stripe\Charge();

    return new \App\Mail\Fair\Registered($event, $user, $charge, 1, 'yes');    
});

Route::get('/testing', function () {

        //
        $json = \Torn::chains(18569);

	$attacks = App\Models\Torn\Attack::all();
	$chains = App\Models\Torn\Chain::all();

	$a = 0; // API chains
	$b = 0; // New chains added to database

        foreach($json['chains'] as $key => $chain) {	
 
            if(!$ch = $chains->where('torn_id', $key)->first()) {
	        $ch = new \App\Models\Torn\Chain();

	        $ch->torn_id = $key;
	        $ch->faction_id = 18569;
                $ch->links = $chain['chain'];
	        $ch->respect = $chain['respect'];
	        $ch->started_at = \Carbon\Carbon::createFromTimestamp($chain['start'], 'Europe/London');
	        $ch->ended_at = \Carbon\Carbon::createFromTimestamp($chain['end'], 'Europe/London');
	        $ch->creator_id = 1;
	        $ch->owner_id = 1;

	        $ch->save();

		$chains->push($ch);

		$b++;
	    }

	    $a++;

	}

	$json = \Torn::attacks(18569);

        $c = 0;
	$d = 0;
	$e = 0;
	$f = 0;

	$players = App\Models\Torn\Player::all();
	$factions = App\Models\Torn\Faction::all();
	$attacks = App\Models\Torn\Attack::all();

        foreach($json['attacks'] as $key => $attack) {

            if(!$at = $attacks->where('torn_id', $key)->first()) {
	        $at = new \App\Models\Torn\Attack();

	        $at->torn_id = $key;
	        $at->attacker_player_id = ($attack['attacker_id'] != 0) ? $attack['attacker_id'] : null;
	        $at->attacker_faction_id = ($attack['attacker_faction'] != 0) ? $attack['attacker_faction'] : null;
	        $at->defender_player_id = ($attack['defender_id'] != 0) ? $attack['defender_id'] : null;
	        $at->defender_faction_id = ($attack['defender_faction'] != 0) ? $attack['defender_faction'] : null;
	        $at->result = $attack['result'];
	        $at->stealthed = $attack['stealthed'];
	        $at->respect_gain = $attack['respect_gain'];
	        $at->chain_link = $attack['chain'];
	        $at->started_at = \Carbon\Carbon::createFromTimestamp($attack['timestamp_started'], 'Europe/London');
	        $at->ended_at = \Carbon\Carbon::createFromTimestamp($attack['timestamp_ended'], 'Europe/London');
	        $at->creator_id = 1;
	        $at->owner_id = 1;
	    
	        $at->save();

	        $attacks->push($at);

		$f++;
	    }

	    if($attack['attacker_id'] > 0 && !$players->where('torn_id', $attack['attacker_id'])->first()) {
	        $player = new App\Models\Torn\Player();

		$player->torn_id = $attack['attacker_id'];
		$player->faction_id = $attack['attacker_faction'];
		$player->name = $attack['attacker_name'];
		$player->creator_id = 1;
		$player->owner_id = 1;

		$player->save();

		$players->push($player);

		$d++;
	    }

	    if($attack['defender_id'] > 0 && !$players->where('torn_id', $attack['defender_id'])->first()) {
	        $player = new App\Models\Torn\Player();

		$player->torn_id = $attack['defender_id'];
		$player->faction_id = $attack['defender_faction'];
		$player->name = $attack['defender_name'];
		$player->creator_id = 1;
		$player->owner_id = 1;

		$player->save();

		$players->push($player);

		$d++;
	    }

	    if($attack['attacker_faction'] > 0 && !$factions->where('torn_id', $attack['attacker_faction'])->first()) {
	        $faction = new App\Models\Torn\Faction();

		$faction->torn_id = $attack['attacker_faction'];
		$faction->name = $attack['attacker_factionname'];
		$faction->respect = 0;
		$faction->creator_id = 1;
		$faction->owner_id = 1;

		$faction->save();

		$factions->push($faction);

		$e++;
	    }

	    if($attack['defender_faction'] > 0 && !$factions->where('torn_id', $attack['defender_faction'])->first()) {
	        $faction = new App\Models\Torn\Faction();

		$faction->torn_id = $attack['defender_faction'];
		$faction->name = $attack['defender_factionname'];
		$faction->respect = 0;
		$faction->creator_id = 1;
		$faction->owner_id = 1;

		$faction->save();

		$factions->push($faction);

		$e++;
	    }

            $c++;
        }

        return 'Processed ' . $a .
	' chains and ' . $c .
	' attacks' .
	'<br />' .
	'Added ' . $f . 
	' attacks, ' . $b .
	' chains, ' . $d .
	' players, and ' . $e .
	' factions.';	

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