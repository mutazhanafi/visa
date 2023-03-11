<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
Use App\User;
Use App\Notifications\visaExpiredNotification;

class sendExpiredNotification extends Command
{
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
        ;
        $users = User::where('id' , 2)->get();
        $users->visaExpiredNotification();
        // dd($users);
        // $users->map(function($user){
        //         $messages = GetThreadMessages::new($user);
        //         $user->notify (new visaExpiredNotification($messages, $user));
        // });
        // $user->visaExpiredNotification();
    }
}
