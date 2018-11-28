<?php

namespace App\Models;

class Province extends Base
{
    //
    public static function boot()
    {
        parent::boot();

	static::created(function($province) {
	     $province->country->increment('provinces_count');
	});

	static::deleting(function($province) {
	    $province->counties->each->delete();
	});

	static::deleted(function($province) {
	    $province->country->decrement('provinces_count');
	});
    }
    
    //
    public function path()
    {
	return '/provinces/' . $this->id;
    }

    //
    public function country()
    {
	return $this->belongsTo(Country::class);
    }

    public function counties()
    {
	return $this->hasMany(County::class);
    }

    public function cities()
    {
	return $this->hasMany(City::class);
    }
}
