<?php

namespace App\Models;

class City extends Base
{
    //
    public static function boot()
    {
        parent::boot();

	static::created(function($city) {
	     $city->province->increment('cities_count');
	});

	static::deleted(function($city) {
	    $city->province->decrement('cities_count');
	});
    }
    
    //
    public function path()
    {
	return '/cities/' . $this->id;
    }

    //
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
