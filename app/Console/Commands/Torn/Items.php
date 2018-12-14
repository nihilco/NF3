<?php

namespace App\Console\Commands\Torn;

use Illuminate\Console\Command;

class Items extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'torn:items';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape data for Torn items.';

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
        $json = \Torn::torn();

        $items = \App\Models\Torn\Item::all();

        $c = 0;

        foreach($json['items'] as $key => $titem) {
 
            if(!$item = $items->where('torn_id', $key)->first()) {
	        $item = new \App\Models\Torn\Item();
	    }
	
	    $item->torn_id = $key;
            $item->name = $titem['name'];
	    $item->description = $titem['description'];
	    $item->buy_price = $titem['buy_price'];
	    $item->sell_price = $titem['sell_price'];
	    $item->market_value = $titem['market_value'];
	    $item->circulation = $titem['circulation'];
	    $item->image = $titem['image'];
	    $item->creator_id = 1;
	    $item->owner_id = 1;

	    $item->save();

            $c++;
        }

        return $c;	
    }
}
