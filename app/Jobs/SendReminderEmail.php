<?php

namespace App\Jobs;

use App\Mail\SendMail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendReminderEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $user, $data,$user_from,$user_email;
    public function __construct($user,$data,$user_from,$user_email)
    {
        $this->user = $user;
        $this->data = $data;
        $this->user_from = $user_from;
        $this->user_email = $user_email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        Mail::to($this->user->email)
//            ->send(new SendMail($this->user,$this->data,$this->user_from));
        $this->user_email->email_to_user()->pivot->status = 1;
        $this->user_email->email_to_user()->pivot->save();
        Log::info("update trang thai thanh cong");
    }
}
