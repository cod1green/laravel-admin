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
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        // $schedule->command('telescope:prune')->daily(); // 24 horas
        $schedule->command('telescope:prune --hours=48')->daily(); // 48 horas

        // limpar os backups artigos
        $schedule->command('backup:clean')->daily()->at('01:00');

        // backup diario somente do banco de dados
        $schedule->command('backup:run --only-db')->daily()->at('01:30');

        // backup semanal de arquivos e banco de dados todos os domingos as 02:00
        $schedule->command('backup:run')->weekly()->sundays()->at('02:00');
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
