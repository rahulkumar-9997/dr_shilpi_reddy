<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('frontend.mail.enquiry-home-mail')
        ->from('gdsons.vns@gmail.com', 'Dr. K Shilpi Reddy Website') // Sender's email and name
        ->subject('Appointment Request on Website - www.drkshilpireddy.com');
    }
}


