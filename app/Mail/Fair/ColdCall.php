<?php

namespace App\Mail\Fair;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ColdCall extends Mailable
{
    use Queueable, SerializesModels;

    public $organization;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($organization = null)
    {
        //
	if($organization) {
	    $this->organization = $organization;
	}
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Coast-to-Coast College Fair Invitation')
		    ->withSwiftMessage(function($message) {
		        $message->getHeaders()->addTextHeader('Sender', 'Coast-to-Coast College Fair <no-reply@coasttocoastcollegefair.com>');
		    })
	            ->from('no-reply@coasttocoastcollegefair.com', 'Coast-to-Coast College Fair')
	            ->view('emails::fair.coldcall.html')
		    ->text('emails::fair.coldcall.text')
		    ->attach('/var/www/NF3/dev/public/img/Postcard-Front.jpg')
		    ->attach('/var/www/NF3/dev/public/img/Postcard-Back.jpg');    
    }
}
