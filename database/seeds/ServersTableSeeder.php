<?php

use Illuminate\Database\Seeder;

class ServersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(App\Models\Server::class)->create([
	    'name' => 'Jupiter',
	    'description' => 'Jupiter web server.',
	    'hostname' => 'jupiter.nihil.co',
	    'type' => 'master',
	    'ipv4' => '158.69.205.52',
	    'ipv6' => '2607:5300:201:3100:0:0:0:68b7',
	    'active' => true,
	]);

	//
	factory(App\Models\Server::class)->create([
	    'name' => 'Apollo',
	    'description' => 'Apollo DNS server.',
	    'hostname' => 'apollo.nihil.co',
	    'type' => 'master',
	    'ipv4' => '167.114.113.233',
	    'ipv6' => '2607:5300:201:3100:0:0:0:68bc',
	    'active' => true,
	]);

	//
	factory(App\Models\Server::class)->create([
	    'name' => 'Castor',
	    'description' => 'Castor DNS server.',
	    'hostname' => 'castor.nihil.co',
	    'type' => 'slave',
	    'ipv4' => '149.56.14.255',
	    'ipv6' => '2607:5300:201:3100:0:0:0:6448',
	    'active' => true,
	]);

	//
	factory(App\Models\Server::class)->create([
	    'name' => 'Pollux',
	    'description' => 'Pollux DNS server.',
	    'hostname' => 'pollux.nihil.co',
	    'type' => 'slave',
	    'ipv4' => '158.69.202.2',
	    'ipv6' => '2607:5300:201:3100:0:0:0:68b6',
	    'active' => true,
	]);
    }
}
