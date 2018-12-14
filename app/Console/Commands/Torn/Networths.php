<?php

namespace App\Console\Commands\Torn;

use Illuminate\Console\Command;

class Networths extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'torn:networths';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape data for Torn networths.';

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
        $n = \Torn::networths();

	$nw = new \App\Models\Torn\Networth();

	$nw->creator_id = 1;
	$nw->owner_id = 1;
	$nw->player_id = 1;
	$nw->pending = $n['networth']['pending']*100;
	$nw->wallet = $n['networth']['wallet']*100;
	$nw->bank = $n['networth']['bank']*100;
	$nw->points = $n['networth']['points']*100;
	$nw->cayman = $n['networth']['cayman']*100;
	$nw->vault = $n['networth']['vault']*100;
	$nw->piggybank = $n['networth']['piggybank']*100 ?: 0;
	$nw->items = $n['networth']['items']*100;
	$nw->displaycase = $n['networth']['displaycase']*100;
	$nw->bazaar = $n['networth']['bazaar']*100;
	$nw->properties = $n['networth']['properties']*100;
	$nw->stockmarket = $n['networth']['stockmarket']*100;
	$nw->auctionhouse = $n['networth']['auctionhouse']*100;
	$nw->company = $n['networth']['company']*100;
	$nw->bookie = $n['networth']['bookie']*100 ?: 0;
	$nw->loan = $n['networth']['loan']*100;
	$nw->unpaidfees = $n['networth']['unpaidfees']*100;
	$nw->total = $n['networth']['total']*100;

	$nw->save();

	$this->info('[' . \Carbon\Carbon::now()->toDateTimeString() . '] NETWORTHS' . PHP_EOL . 'Added 1 networth.');
    }
}
