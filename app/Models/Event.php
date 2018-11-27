<?php

namespace App\Models;

class Event extends Base
{
    //
    public static function boot()
    {
        parent::boot();
	
	static::deleting(function($event) {
	    $event->participants->each->delete();
	});
    }

    //
    public function getRouteKeyName()
    {
	return 'slug';
    }

    //
    public function path()
    {
        //
	return "/events/" . $this->slug;
    }

    //
    public function participants()
    {
	//
	return $this->hasMany(Participant::class);
    }
}
