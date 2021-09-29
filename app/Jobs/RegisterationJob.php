<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\DirectorRegistrationMail;
use App\Mail\AdminNotifyDirectorRegistrationMail;
use App\Mail\CoachRegistrationMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class RegisterationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Execute the job.
     * @param array $this->details
     * @return void
     */
    public function handle()
    {
        if ($this->details['type'] == 2) {
            $admin = User::where('type', '=', 1)->first();
            $adminEmail = new AdminNotifyDirectorRegistrationMail($admin);
            Mail::to($admin['email'])->send($adminEmail);

            $directorEmail = new DirectorRegistrationMail($this->details);
            Mail::to($this->details['email'])->send($directorEmail);
        } else {
            $coachEmail = new CoachRegistrationMail($this->details);
            Mail::to($this->details['email'])->send($coachEmail);
        }
    }
}
