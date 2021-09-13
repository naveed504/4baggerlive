<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Mail;
use Exception;

class DirectorRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
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
            ->subject('Director  Registration Notification')
            ->view('email.directorRegistration')
            ->with('data', $this->details);
        }catch(Exception $e){
            dd($e->getMessage());

        }
    }
}
