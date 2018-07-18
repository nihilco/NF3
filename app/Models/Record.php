<?php

namespace App\Models;

class Record extends Base
{
    public static function boot()
    {
        parent::boot();

	static::created(function($record) {
	    $record->zone->increment('records_count');
	});

	static::deleted(function($record) {
	    $record->zone->decrement('records_count');
	});
    }
    
    //
    public function path()
    {
	return '/records/' . $this->id;
    }

    //
    public function zone()
    {
	return $this->belongsTo(Zone::class);
    }
}
