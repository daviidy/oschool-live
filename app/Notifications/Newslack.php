<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;

use Illuminate\Notifications\Notification;

use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Notifications\Messages\MailMessage;

use Illuminate\Notifications\Messages\SlackMessage;

class Newslack extends Notification

{

   use Queueable;

   public function __construct()

   {

       //

   }

   public function via($notifiable)

   {

       return ['slack'];

   }

   public function toSlack($notifiable)

   {

       return (new SlackMessage)

           ->content('A new visitor has visited to your application . $this->user->first(1->name)');

   }

}
