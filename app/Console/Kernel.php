<?php

namespace App\Console;

use App\Helpers;
use App\NewPayPal;
use App\Order;
use App\AllPay;
use App\PayPal;
use App\Token;
use App\User;
use Carbon\Carbon;
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
        $schedule->call(function () {
            Token::where('expiry_time', '<', time())->delete();
            Helpers::deleteExpiredPaymentOrders([new AllPay(), new PayPal()]);
            Order::where('expiry_time', '<', Carbon::now())->delete();
            Token::deleteInvalidToken();
            NewPayPal::dailyCaptureAuthorization();
            User::updateEmails();
        })->daily();
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
