<?php

namespace App\Console\Commands;
use App\invoices;
use Illuminate\Console\Command;

class expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'visa:expir';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'expir visa';

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
        
    }}
}