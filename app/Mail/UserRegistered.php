<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;

class UserRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        //
	$this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Welcome to ' . config('app.website')->name)
		    ->withSwiftMessage(function($message) {
		        $message->getHeaders()->addTextHeader('Sender', config('app.website')->name . ' <no-reply@' . config('app.website')->domain->domain . '>');
		    })
	            ->from('no-reply@' . config('app.website')->domain->domain, config('app.website')->name)
	            ->view('emails::users.registered.html')
		    ->text('emails::users.registered.text');
    }
}
