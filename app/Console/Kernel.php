<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
	\App\Console\Commands\MineData::class,

        //
	\App\Console\Commands\Torn\Players::class,
	\App\Console\Commands\Torn\Factions::class,
	\App\Console\Commands\Torn\Items::class,
	\App\Console\Commands\Torn\Chains::class,
	\App\Console\Commands\Torn\Attacks::class,
	\App\Console\Commands\Torn\Networths::class,
	\App\Console\Commands\Monitors\Servers::class,
	\App\Console\Commands\Monitors\Websites::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('torn:networths')
                  ->daily()
		  ->appendOutputTo(storage_path('logs/schedule.log'));

        $schedule->command('torn:chains')
                  ->daily()
		  ->appendOutputTo(storage_path('logs/schedule.log'));

        $schedule->command('torn:attacks')
                  ->everyFiveMinutes()
		  ->appendOutputTo(storage_path('logs/schedule.log'));
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
