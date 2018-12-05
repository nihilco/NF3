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
	     'name' => 'Blue Springs Historicall Association',
	     'analytics_code' => 'UA-2228318-38',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'bluespringshistoricalassociation.org')->first()->id,
	     'hostname' => 'dev.bluespringshistroicalassociation.org',
	     'name' => 'Blue Springs Historicall Association',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'cclemmer.com')->first()->id,
	     'hostname' => 'www.cclemmer.com',
	     'name' => 'cclemmer.com',
	     'analytics_code' => 'UA-2228318-12',
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
	     'analytics_code' => 'UA-2228318-28',
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
	     'analytics_code' => 'UA-2228318-37',
	     'under_construction' => false,	     
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
	     'analytics_code' => 'UA-2228318-39',
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
	     'analytics_code' => 'UA-2228318-8',
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
	     'analytics_code' => 'UA-2228318-46',
	     'active' => true,	     
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
	     'name' => 'Fisher Scholarship',
	     'active' => false,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'fisherscholarship.com')->first()->id,
	     'hostname' => 'dev.fisherscholarship.com',
	     'name' => 'Fisher Scholarship',
	     'active' => false,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'homeapothecarie.com')->first()->id,
	     'hostname' => 'www.homeapothecarie.com',
	     'name' => 'Home Apothecarie',
	     'active' => false,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'homeapothecarie.com')->first()->id,
	     'hostname' => 'dev.homeapothecarie.com',
	     'name' => 'Home Apothecarie',
	     'active' => false,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'laundr.co')->first()->id,
	     'hostname' => 'www.laundr.co',
	     'name' => 'Laundr',
	     'analytics_code' => 'UA-2228318-40',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'laundr.co')->first()->id,
	     'hostname' => 'dev.laundr.co',
	     'name' => 'Laundr',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'laqhia.com')->first()->id,
	     'hostname' => 'www.laqhia.com',
	     'name' => 'Laqhia',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'laqhia.com')->first()->id,
	     'hostname' => 'dev.laqhia.com',
	     'name' => 'Laqhia',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'lexanderfarm.com')->first()->id,
	     'hostname' => 'www.lexanderfarm.com',
	     'name' => 'Lexander Farm',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'lexanderfarm.com')->first()->id,
	     'hostname' => 'dev.lexanderfarm.com',
	     'name' => 'Lexander Farm',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'lists.world')->first()->id,
	     'hostname' => 'www.lists.world',
	     'name' => 'Lists World',
	     'analytics_code' => 'UA-2228318-45',
	     'active' => true,	     
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'lists.world')->first()->id,
	     'hostname' => 'dev.lists.world',
	     'name' => 'Lists World',
	     'active' => true,	     
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'mazestonelaw.com')->first()->id,
	     'hostname' => 'www.mazestonelaw.com',
	     'name' => 'Maze & Stone Law PLLC.',
	     'analytics_code' => 'UA-2228318-41',
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
	     'name' => 'My Run, My Cause',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'myrun-mycause.org')->first()->id,
	     'hostname' => 'dev.myrun-mycause.org',
	     'name' => 'My Run, My Cause',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'nihil.co')->first()->id,
	     'hostname' => 'www.nihil.co',
	     'name' => 'NIHIL',
	     'analytics_code' => 'UA-2228318-24',
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
	     'analytics_code' => 'UA-2228318-13',
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
	     'name' => 'Nurses 4 Change',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'nurses4change.org')->first()->id,
	     'hostname' => 'dev.nurses4change.org',
	     'name' => 'Nurses 4 Change',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'outofmorbidcuriosity.com')->first()->id,
	     'hostname' => 'www.outofmorbidcuriosity.com',
	     'name' => 'Out of Morbid Curiosity',
	     'analytics_code' => 'UA-2228318-29',
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
	     'name' => 'Schows\' Estate Sales',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'schowsestatesales.com')->first()->id,
	     'hostname' => 'dev.schowsestatesales.com',
	     'name' => 'Schows\' Estate Sales',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'taraloka.org')->first()->id,
	     'hostname' => 'www.taraloka.org',
	     'name' => 'Taraloka',
	     'analytics_code' => 'UA-2228318-23',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'taraloka.org')->first()->id,
	     'hostname' => 'dev.taraloka.org',
	     'name' => 'Taraloka',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'taralokafoundation.org')->first()->id,
	     'hostname' => 'www.taralokafoundation.org',
	     'name' => 'Taraloka',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'taralokafoundation.org')->first()->id,
	     'hostname' => 'dev.taralokafoundation.org',
	     'name' => 'Taraloka',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'throughhike.org')->first()->id,
	     'hostname' => 'www.throughhike.org',
	     'name' => 'Through Hike',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'throughhike.org')->first()->id,
	     'hostname' => 'dev.throughhike.org',
	     'name' => 'Through Hike',
	     'active' => true,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'tornaddict.com')->first()->id,
	     'hostname' => 'www.tornaddict.com',
	     'name' => 'Torn Addict',
	     'analytics_code' => 'UA-2228318-42',
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
	     'analytics_code' => 'UA-2228318-43',
	     'active' => true,
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
	     'analytics_code' => 'UA-2228318-7',
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
	     'name' => 'UTK Delts',
	     'active' => false,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'utkdelts.org')->first()->id,
	     'hostname' => 'dev.utkdelts.org',
	     'name' => 'UTK Delts',
	     'active' => false,
	]);

        //
	factory(App\Models\Website::class)->create([
	     'domain_id' => $domains->where('domain', 'virtuosolo.com')->first()->id,
	     'hostname' => 'www.virtuosolo.com',
	     'name' => 'Virtuosolo',
	     'analytics_code' => 'UA-2228318-44',
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
