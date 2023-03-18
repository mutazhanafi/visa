<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
Use App\User;
Use App\Invoices;
Use App\Notifications\visaExpiredNotification;
Use Carbon\Carbon;
Use Illuminate\Support\Facades\Notifiction;
use App\Console\Commands\Notification;
use Illuminate\Notifications\Notifiable;


class sendExpiredNotification extends Command
{
    use Notifiable;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:visaExpiredNotification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email When User Visa Date Ends';

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
     * @return int
     */
    public function handle()
    {
        $expiredVisas = Invoices::whereDate('Due_date' , \Carbon\Carbon::now()->today())->get();
        if($expiredVisas){
        foreach($expiredVisas as $expiredVisa)
        {
           $users = User::where('id' , 2)->get();
              foreach ($users as $user) {
                  $user->notify(new visaExpiredNotification($expiredVisa));
                }
            }
        }
        




        // $users->visaExpiredNotification();
        // dd($users);
        // $users->map(function($user){
        //         $messages = GetThreadMessages::new($user);
        //         $user->notify (new visaExpiredNotification($messages, $user));
        // });
        // $user->visaExpiredNotification();
    }
}
