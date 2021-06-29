<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

//use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //$schedule->command(Log::info("It's working"))->everyMinute();

        $schedule->command('queue:restart')->everyFiveMinutes();
        $schedule->command('queue:work --sleep=3 --tries=3')->everyMinute()->withoutOverlapping();

        $schedule->command('telescope:prune --hours=48')->daily()
            ->environments(['staging', 'production']);

        $schedule->command('backup:clean --only-to-disk=google')->daily()->at('01:00')
            ->environments(['staging', 'production']);

        $schedule->command('backup:run --only-to-disk=google --only-db')->weekdays()->at('01:30')
            ->environments(['staging', 'production']);

        $schedule->command('backup:run --only-to-disk=google --only-db')->saturdays()->at('01:30')
            ->environments(['staging', 'production']);

        $schedule->command('backup:run --only-to-disk=google')->sundays()->at('01:30')
            ->environments(['staging', 'production']);
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
