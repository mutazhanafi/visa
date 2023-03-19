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
        $this->$visaDetails = $visaDetails;
        
     
   
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
        ->markdown('users.ExpiredVisaEMail', ['data' => $this->visaDetails]);
        // ->line('Visa Has Been Expired ')
        // ->action('Data "', url())
        // ->line('your visa has been expired')
        // ->line($this->invoice_number ,$this->invoice_number, $this->invoice_name, $this->invoice_Date, $this->Due_date, $this->Due_date, $this->product,
        //  $this->section_id, $this->Amount_collection, $this->Amount_Commission, $this->Discount, $this->Value_VAT,
        //  $this->Value_Status, $this->note, $this->Payment_Date);
        // ->lineif(1 == 1 ,"Amount paid: {$this->invoice_number}")    
        // ->lineif(1 == 1 ,"Amount paid: {$this->invoice_name}")    
        // ->lineif(1 == 1 ,"Amount paid: {$this->invoice_Date}")    
        // ->lineif(1 == 1 ,"Amount paid: {$this->Due_date}")    
        // ->lineif(1 == 1 ,"Amount paid: {$this->product}")    
        // ->lineif(1 == 1 ,"Amount paid: {$this->section_id}")    
        // ->lineif(1 == 1 ,"Amount paid: {$this->Amount_collection}")    
        // ->lineif(1 == 1 ,"Amount paid: {$this->Amount_Commission}")    
        // ->lineif(1 == 1 ,"Amount paid: {$this->Discount}")    
        // ->lineif(1 == 1 ,"Amount paid: {$this->Value_VAT}")    
        // ->lineif(1 == 1 ,"Amount paid: {$this->Rate_VAT}")    
        // ->lineif(1 == 1 ,"Amount paid: {$this->Value_Status}")    
        // ->lineif(1 == 1 ,"Amount paid: {$this->note}")    
        // ->lineif(1 == 1 ,"Amount paid: {$this->Payment_Date}") ;  
    }


public function build()
    {
        
       $this->data = $all;
        return view('emails.email');
        
    }
}