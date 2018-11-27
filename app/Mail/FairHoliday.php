<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Contact;

class FairHoliday extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Happy Holidays from the Coast-to-Coast College Fair')
		    ->withSwiftMessage(function($message) {
		        $message->getHeaders()->addTextHeader('Sender', 'Coast-to-Coast College Fair <no-reply@coasttocoastcollegefair.com>');
		    })
	            ->from('no-reply@coasttocoastcollegefair.com', 'Coast-to-Coast College Fair')
	            ->view('emails::fair.holiday.html')
		    ->text('emails::fair.holiday.text')
		    ->attach('/var/www/NF3/dev/public/img/Postcard-Front.jpg')
		    ->attach('/var/www/NF3/dev/public/img/Postcard-Back.jpg');
    }
}
