<?php

namespace App\Models;

class Zone extends Base
{
    //
    public static function boot()
    {
        parent::boot();

	static::deleting(function($zone) {
	    $zone->records->each->delete();
	});
    }

    //
    public function path()
    {
	return '/zones/' . $this->id;
    }

    //
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    //
    public function records()
    {
	return $this->hasMany(Record::class);
    }
}
