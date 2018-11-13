<?php

use Illuminate\Database\Seeder;

class WebsitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//
	$domains = App\Models\Domain::all();

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'bluespringshistoricalassociation.org')->first()->id,
	     'hostname' => 'www.bluespringshistoricalassociation.org',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'bluespringshistoricalassociation.org')->first()->id,
	     'hostname' => 'dev.bluespringshistroicalassociation.org',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'cclemmer.com')->first()->id,
	     'hostname' => 'www.cclemmer.com',
	     'name' => 'cclemmer.com',
	     'analytics_code' => 4,
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'cclemmer.com')->first()->id,
	     'hostname' => 'dev.cclemmer.com',
	     'name' => 'cclemmer.com',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'chattitup.com')->first()->id,
	     'hostname' => 'www.chattitup.com',
	     'name' => 'Chattitup',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'chattitup.com')->first()->id,
	     'hostname' => 'dev.chattitup.com',
	     'name' => 'Chattitup',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'coasttocoastcollegefair.com')->first()->id,
	     'hostname' => 'www.coasttocoastcollegefair.com',
	     'name' => 'Coast-to-Coast College Fair',
	     'analytics_code' => 5,
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'coasttocoastcollegefair.com')->first()->id,
	     'hostname' => 'dev.coasttocoastcollegefair.com',
	     'name' => 'Coast-to-Coast College Fair',
	     'under_construction' => false,
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'crosbyjeepclub.com')->first()->id,
	     'hostname' => 'www.crosbyjeepclub.com',
	     'name' => 'Crosby Jeep Club',
	     'analytics_code' => 6,
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'crosbyjeepclub.com')->first()->id,
	     'hostname' => 'dev.crosbyjeepclub.com',
	     'name' => 'Crosby Jeep Club',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'duespay.com')->first()->id,
	     'hostname' => 'www.duespay.com',
	     'name' => 'Dues Pay',
	     'analytics_code' => 7,
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'duespay.com')->first()->id,
	     'hostname' => 'dev.duespay.com',
	     'name' => 'Dues Pay',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'electionbrief.com')->first()->id,
	     'hostname' => 'www.electionbrief.com',
	     'name' => 'Election Brief',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'electionbrief.com')->first()->id,
	     'hostname' => 'dev.electionbrief.com',
	     'name' => 'Election Brief',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'fisherscholarship.com')->first()->id,
	     'hostname' => 'www.fisherscholarship.com',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'fisherscholarship.com')->first()->id,
	     'hostname' => 'dev.fisherscholarship.com',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'homeapothecarie.com')->first()->id,
	     'hostname' => 'www.homeapothecarie.com',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'homeapothecarie.com')->first()->id,
	     'hostname' => 'dev.homeapothecarie.com',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'laundr.co')->first()->id,
	     'hostname' => 'www.laundr.co',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'laundr.co')->first()->id,
	     'hostname' => 'dev.laundr.co',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'laqhia.com')->first()->id,
	     'hostname' => 'www.laqhia.com',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'laqhia.com')->first()->id,
	     'hostname' => 'dev.laqhia.com',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'mazestonelaw.com')->first()->id,
	     'hostname' => 'www.mazestonelaw.com',
	     'name' => 'Maze & Stone Law PLLC.',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'mazestonelaw.com')->first()->id,
	     'hostname' => 'dev.mazestonelaw.com',
	     'name' => 'Maze & Stone Law PLLC.',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'myrun-mycause.org')->first()->id,
	     'hostname' => 'www.myrun-mycause.org',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'myrun-mycause.org')->first()->id,
	     'hostname' => 'dev.myrun-mycause.org',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'nihil.co')->first()->id,
	     'hostname' => 'www.nihil.co',
	     'name' => 'NIHIL',
	     'analytics_code' => 1,
	     'active' => true,
	]);

	//
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'nihil.co')->first()->id,
	     'hostname' => 'dev.nihil.co',
	     'name' => 'NIHIL',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'nihilframework.com')->first()->id,
	     'hostname' => 'www.nihilframework.com',
	     'name' => 'NIHIL Framework',
	     'analytics_code' => 2,
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'nihilframework.com')->first()->id,
	     'hostname' => 'dev.nihilframework.com',
	     'name' => 'NIHIL Framework',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'nurses4change.org')->first()->id,
	     'hostname' => 'www.nurses4change.org',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'nurses4change.org')->first()->id,
	     'hostname' => 'dev.nurses4change.org',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'outofmorbidcuriosity.com')->first()->id,
	     'hostname' => 'www.outofmorbidcuriosity.com',
	     'name' => 'Out of Morbid Curiosity',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'outofmorbidcuriosity.com')->first()->id,
	     'hostname' => 'dev.outofmorbidcuriosity.com',
	     'name' => 'Out of Morbid Curiosity',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'reddo.online')->first()->id,
	     'hostname' => 'www.reddo.online',
	     'name' => 'Reddo',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'reddo.online')->first()->id,
	     'hostname' => 'dev.reddo.online',
	     'name' => 'Reddo',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'schowsestatesales.com')->first()->id,
	     'hostname' => 'www.schowesestatesales.com',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'schowsestatesales.com')->first()->id,
	     'hostname' => 'dev.schowsestatesales.com',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'taraloka.org')->first()->id,
	     'hostname' => 'www.taraloka.org',
	     'name' => 'Taraloka',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'taraloka.org')->first()->id,
	     'hostname' => 'dev.taraloka.org',
	     'name' => 'Taraloka',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'throughhike.org')->first()->id,
	     'hostname' => 'www.throughhike.org',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'throughhike.org')->first()->id,
	     'hostname' => 'dev.throughhike.org',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'tornaddict.com')->first()->id,
	     'hostname' => 'www.tornaddict.com',
	     'name' => 'Torn Addict',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'tornaddict.com')->first()->id,
	     'hostname' => 'dev.tornaddict.com',
	     'name' => 'Torn Addict',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'unclebucksfarm.com')->first()->id,
	     'hostname' => 'www.unclebucksfarm.com',
	     'name' => 'Uncle Bucks Farm',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'unclebucksfarm.com')->first()->id,
	     'hostname' => 'dev.unclebucksfarm.com',
	     'name' => 'Uncle Bucks Farm',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'unclebucksrednecks.com')->first()->id,
	     'hostname' => 'www.unclebucksrednecks.com',
	     'name' => 'Uncle Bucks Red Necks',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'unclebucksrednecks.com')->first()->id,
	     'hostname' => 'dev.unclebucksrednecks.com',
	     'name' => 'Uncle Bucks Red Necks',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'uclemmer.com')->first()->id,
	     'hostname' => 'www.uclemmer.com',
	     'name' => 'uclemmer',
	     'analytics_code' => 3,
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'uclemmer.com')->first()->id,
	     'hostname' => 'dev.uclemmer.com',
	     'name' => 'uclemmer',
	     'under_construction' => false,
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'utkdelts.org')->first()->id,
	     'hostname' => 'www.utkdelts.org',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'utkdelts.org')->first()->id,
	     'hostname' => 'dev.utkdelts.org',
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'virtuosolo.com')->first()->id,
	     'hostname' => 'www.virtuosolo.com',
	     'name' => 'Virtuosolo',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'virtuosolo.com')->first()->id,
	     'hostname' => 'dev.virtuosolo.com',
	     'name' => 'Virtuosolo',
	     'active' => true,
	]);
    }
}
