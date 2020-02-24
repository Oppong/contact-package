<?php

namespace Oppong\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;


      public $name;
      public $email;
      public $content;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $name, $email, $content)
    {
        $this->content = $content;
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with([ 'name' => $this->name, 'email' => $this->email,'content' => $this->content, ]);
    }
}
