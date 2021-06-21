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
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('telescope:prune --hours=48')->daily()
            ->environments(['staging', 'production']);

        $schedule->command('backup:clean --only-to-disk=google_backup')->daily()->at('01:00')
            ->environments(['staging', 'production']);

        $schedule->command('backup:run --only-to-disk=google_backup --only-db')->weekdays()->at('01:30')
            ->environments(['staging', 'production']);

        $schedule->command('backup:run --only-to-disk=google_backup --only-db')->saturdays()->at('01:30')
            ->environments(['staging', 'production']);

        $schedule->command('backup:run --only-to-disk=google_backup')->sundays()->at('01:30')
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
