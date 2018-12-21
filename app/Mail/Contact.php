<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Issue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $issue;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Issue $issue)
    {
        //
	$this->issue = $issue;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thanks for Contacting Us')
		    ->withSwiftMessage(function($message) {
		        $message->getHeaders()->addTextHeader('Sender', config('app.website')->name . ' <no-reply@' . config('app.website')->domain->domain . '>');
		    })
	            ->from('no-reply@' . config('app.website')->domain->domain, config('app.website')->name)
	            ->view('emails::contact.html')
		    ->text('emails::contact.text');
    
    }
}
