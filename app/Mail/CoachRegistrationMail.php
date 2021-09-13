<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Exception;

class CoachRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $coachdetails ;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($coachdetails)
    {
        $this->coachdetails = $coachdetails;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        try{
            $this->from('4bagger@gmail.com', '4-bagger support')
           ->subject('Team Coach Registration Notification')
           ->view('email.coachRegistration')
           ->with('data', $this->coachdetails);
       }catch(Exception $e){
           dd($e->getMessage());

       }
        
    }
}
