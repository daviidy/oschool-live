<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Mail;
use App\User;

class SendSubscriptionEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:subscription';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send to Users an email when their subscription is almost expired';

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
        $date = Carbon::now();
        //get users which subscription expires in 10 days
        $users = User::where('type', 'default')->orderby('id', 'asc')->paginate(1000);

        foreach ($users as $user) {
          if ($user->fin_abonnement->subDays(10) <= $date && $user->fin_abonnement >= $date) {
            //Send email to the users
            Mail::send('mails.fin-abonnement', ['user' => $user], function($message) use ($user){
              $message->to($user->email, 'Oschool')->subject('Votre abonnement va bientôt prendre fin !');
              $message->from('eventsoschool@gmail.com', 'Oschool');
            });
          }
        }

        $this->info('Subscription messages sent successfully!');


    }
}
