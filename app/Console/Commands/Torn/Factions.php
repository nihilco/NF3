<?php

namespace App\Console\Commands\Torn;

use Illuminate\Console\Command;

class Factions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'torn:factions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape data for Torn factions.';

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

    }
}
