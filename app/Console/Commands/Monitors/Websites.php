<?php

namespace App\Console\Commands\Monitors;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use App\Models\StatusCheck;
use App\Models\Type;
use App\Models\Website;
use GuzzleHttp\Client;

class Websites extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monitor:websites';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check the status of a website.';

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
	$websites = Website::all();
	$types = Type::all();


    	$bar = $this->output->createProgressBar(count($websites));
	$bar->setFormat("[%current%/%max%] Checking %hostname%... %code% %elapsed%\n");
	
        $this->line('Checking websites...');

	foreach($websites as $website) {
	     $code = 0;
	     $reason = 'INACTIVE';
	     
	     if($website->active) {
	          $c = new Client();
   	          $res = $c->request('GET', 'http://' . $website->hostname);
	          $code = $res->getStatusCode();
		  $reason = $res->getReasonPhrase();

		  $statusCheck = new StatusCheck();

		  //
		  $statusCheck->creator_id = auth()->id() ?: 1;
		  $statusCheck->owner_id = auth()->id() ?: 1;
		  $statusCheck->type_id = $types->where('name', 'Website')->first()->id;
		  $statusCheck->resource_id = $website->id;
		  $statusCheck->resource_type = get_class($website);
		  $statusCheck->code = $code;
		  $statusCheck->message = $reason;
    		  $statusCheck->status_type_id = $types->where('name', $reason)->first()->id;
        	  $statusCheck->save();
	     }

    	     $this->line('');
	     $bar->setMessage($website->hostname, 'hostname');
	     if($code == 200) {
	          $bar->setMessage('<info>' . $code . ' ' . $reason . '</info>', 'code');
	     }else{
	          $bar->setMessage($code . ' ' . $reason, 'code');
	     }
	     
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
              array('website', InputArgument::OPTIONAL, 'URL of website to check.', null)
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
              array('url', null, InputOption::OPTIONAL, 'URL of website to check.'),
         );
    }
}
