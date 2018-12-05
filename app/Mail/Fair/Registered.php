<?php

namespace App\Mail\Fair;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Event;
use App\Models\Contact;

class Registered extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $event;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Event $event, Contact $contact)
    {
        //
	$this->contact = $contact;
	$this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Coast-to-Coast College Fair Registration')
		    ->withSwiftMessage(function($message) {
		        $message->getHeaders()->addTextHeader('Sender', 'Coast-to-Coast College Fair <no-reply@coasttocoastcollegefair.com>');
		    })
	            ->from('no-reply@coasttocoastcollegefair.com', 'Coast-to-Coast College Fair')
	            ->view('emails::fair.registered.html')
		    ->text('emails::fair.registered.text');
    }
}
