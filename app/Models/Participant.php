<?php

namespace App\Models;

class Participant extends Base
{
    //
    public static function boot()
    {
        parent::boot();

	static::created(function($participant) {
	     $participant->event->increment('spots_filled');
	});

	static::deleted(function($participant) {
	    $participant->event->decrement('spots_filled');
	});
    }
    
    //
    public function path()
    {
        //
	return "/participants/" . $this->id;
    }

    //
    public function event()
    {
	//
	return $this->belongsTo(Event::class);
    }
}
