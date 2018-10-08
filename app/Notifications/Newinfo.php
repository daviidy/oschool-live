<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class Newinfo extends Notification
{
  use Queueable;

 protected $my_notification;

 public function __construct($msg)

 {

     $this->my_notification = $msg;

 }

 public function via($notifiable)

 {

     return ['mail'];

 }

 public function toMail($notifiable)

 {

     return (new MailMessage)

                 ->line('Welcome '.$this->my_notification)

                 ->action('Welcome to Cloudways', url('/'))

                 ->line('Thank you for using our application!');

 }

 public function toArray($notifiable)

 {

     return [

         //

     ];

 }

}
