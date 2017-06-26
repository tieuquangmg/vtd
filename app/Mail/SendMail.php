<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data,$user,$user_send;
    public function __construct($user,$data,$user_send)
    {
        $this->user = $user;
        $this->data = $data;
        $this->user_send = $user_send;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
	    Log::info("gui email ".$this->user->full_name);
//        dd($this->data);
        return $this
            ->from($this->user_send)
            ->view('emails.send_to_user')
//            ->subject($this->data['subject'])
            ;
    }
}
