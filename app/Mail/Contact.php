<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PhpParser\Node\Expr\Cast\String_;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name, $phone, $subject, $email, $comments;

    public function __construct(String $name, String $email, String $phone, String $comments, String $subject)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->comments = $comments;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contactus')->subject($this->subject);
    }
}
