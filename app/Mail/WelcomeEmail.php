<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $message_data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $message_data)
    {
        $this->message_data = $message_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.welcome')->with(['message_data' => $this->message_data]);
    }
}
