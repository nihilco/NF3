<?php

namespace App\Console\Commands\Torn;

use Illuminate\Console\Command;

class Chains extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'torn:chains';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape data for Torn chains.';

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
        //
        $json = \Torn::chains(18569);

        $chains = \App\Models\Torn\Chain::all();
	$last = $chains->last();

        $c = 0;
	$d = 0;

        foreach($json['chains'] as $key => $chain) {

	    if($key <= $last->torn_id) {
	        continue;
	    }

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

	        $d++;
	    }
	
            $c++;
        }

	$this->info('[' . \Carbon\Carbon::now()->toDateTimeString() . '] CHAINS' . PHP_EOL . 'Processed ' . $c . ' chains.  Added ' . $d . ' new chains.');

    }
}
