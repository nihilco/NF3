<?php

use Illuminate\Database\Seeder;

class DomainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tlds = App\Models\Tld::all();

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.co')->first()->id,
	    'domain' => 'antiquarians.co',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.org')->first()->id,
	    'domain' => 'bluespringshistoricalassociation.org',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'butterflyoutdoors.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'cclemmer.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'chattanoogaantiques.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'chattanoogaestatesales.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'chattitup.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'coasttocoastcollegefair.com',
	    'active' => true,
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'crosbyjeepclub.com',
	    'active' => true,
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'duespay.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'electionbrief.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'empireconsultantgroup.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'fisherscholarship.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'gahickory.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'goodbyemonstercookies.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'homeapothecarie.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.co')->first()->id,
	    'domain' => 'laundr.co',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'laqhia.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'lexanderfarm.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.world')->first()->id,
	    'domain' => 'lists.world',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'mazestonelaw.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.org')->first()->id,
	    'domain' => 'myrun-mycause.org',
	]);

        //
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.co')->first()->id,
	    'domain' => 'nihil.co',
	    'active' => true,
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'nihilframework.com',
	    'active' => true,
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.org')->first()->id,
	    'domain' => 'nurses4change.org',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'outofmorbidcuriosity.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.online')->first()->id,
	    'domain' => 'reddo.online',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'schowsestatesales.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'sweetenscovegolfclub.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.org')->first()->id,
	    'domain' => 'taraloka.org',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.org')->first()->id,
	    'domain' => 'taralokafoundation.org',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'ternionathletics.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.org')->first()->id,
	    'domain' => 'throughhike.org',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'tisdaleconstructioninc.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'tornaddict.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.org')->first()->id,
	    'domain' => 'twilliamsclass.org',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'unclebucksfarm.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'unclebucksrednecks.com',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'uclemmer.com',
	    'active' => true,
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.net')->first()->id,
	    'domain' => 'uclemmer.net',
	    'active' => true,
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.org')->first()->id,
	    'domain' => 'utkdelts.org',
	]);

	//
	factory(App\Models\Domain::class)->create([
	    'tld_id' => $tlds->where('domain', '.com')->first()->id,
	    'domain' => 'virtuosolo.com',
	]);

    }
}
