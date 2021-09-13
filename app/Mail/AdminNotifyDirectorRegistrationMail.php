<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Exception;

class AdminNotifyDirectorRegistrationMail extends Mailable
{
    protected $details;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
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
            $this->from('4-bagger@gmail.com', '4-bagger support')
            ->subject('Admin Notification')
            ->view('email.adminNotifyDirectorRegister')
            ->with('data', $this->details);
        }catch(Exception $e){
            dd($e->getMessage());

        }
        
    }
}
