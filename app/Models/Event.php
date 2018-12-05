<?php

namespace App\Models;

class Event extends Base
{
    //
    protected $dates = [
        'created_at',
	'updated_at',
	'deleted_at',
	'starts_at',
	'ends_at',
    ];
	
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
