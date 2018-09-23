<?php

namespace App\Console\Commands\Monitors;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use App\Models\Server;

class Servers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monitor:servers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check the status of a server.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
	$servers = Server::all();
		
    	$bar = $this->output->createProgressBar(count($servers));
	$bar->setFormat("[%bar%] %current%/%max% Checking %name% (%hostname%)... %elapsed%\n");
	
	$this->line('Checking servers...');

	foreach($servers as $server) {
    	     $this->line('');
	     $bar->setMessage($server->name, 'name');
	     $bar->setMessage($server->hostname, 'hostname');
	     $bar->advance();
	}

	$bar->finish();
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getArguments()
    {
         return array(
              array('server', InputArgument::OPTIONAL, 'Name, hostname, ipv4, or ipv6 of server to check.', null)
         );
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
         return array(
              array('name', null, InputOption::OPTIONAL, 'Nickname of server to check.'),
	      array('hostname', null, InputOption::OPTIONAL, 'Hostname of server to check.'),
	      array('ipv4', null, InputOption::OPTIONAL, 'IPv4 of server to check.'),
	      array('ipv6', null, InputOption::OPTIONAL, 'IPv6 of server to check.'),
         );
    }
}
