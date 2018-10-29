<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Mail;

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
        $users = User::orderby('id', 'asc')->get();

        foreach ($users as $user) {
          if ($user->fin_abonnement->subDays(10) <= $date ) {
            //Send email to the users
            Mail::send('mailsAchat.echec', function($message) use ($user){
              $message->to($user->email, 'Cher(ère) Etudiant(e)')->subject('Votre paiement a bien été pris en compte !');
              $message->from('eventsoschool@gmail.com', 'Oschool');
            });
          }
        }

        $this->info('Subscription messages sent successfully!');


    }
}
