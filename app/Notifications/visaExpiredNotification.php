<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\invoices;
use App\User;
use App\invoices_details;

class visaExpiredNotification extends Notification implements ShouldQueue
{
    use Queueable;


    public $visaDetails;

    public function __construct($visaDetails)
    {
        $this->visaDetails = $visaDetails;   
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->subject('Expired Visa Email')
        ->markdown('users.ExpiredVisaEMail', ['visaDetails' => $this->visaDetails]);
    }


public function build()
    {
        
       $this->data = $all;
        return view('emails.email');
        
    }
}