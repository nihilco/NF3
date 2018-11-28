<?php

namespace App\Models;

class County extends Base
{
    //
    public static function boot()
    {
        parent::boot();

	static::created(function($county) {
	     $county->country->increment('counties_count');
	     $county->province->increment('counties_count');	     
	});

	static::deleting(function($county) {
	    $county->cities->each->delete();
	});

	static::deleted(function($county) {
	    $county->country->decrement('counties_count');
	    $county->province->decrement('counties_count');
	});
    }

    //
    public function path()
    {
        return "/county/" . $this->id;
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
