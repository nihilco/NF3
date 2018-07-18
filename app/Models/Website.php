<?php

namespace App\Models;

class Website extends Base
{
    public static function boot()
    {
        parent::boot();

	static::created(function($website) {
	    $website->domain->increment('websites_count');
	});

	static::deleted(function($website) {
	    $website->domain->decrement('websites_count');
	});
    }

    //
    public function path()
    {
	return '/websites/' . $this->id;
    }

    //
    public function domain()
    {
	return $this->belongsTo(Domain::class);
    }
}
