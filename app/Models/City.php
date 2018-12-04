<?php

namespace App\Models;

class City extends Base
{
    //
    public static function boot()
    {
        parent::boot();

	static::created(function($city) {
	     if($city->county) {
	         $city->county->increment('cities_count');
	     }
	     $city->province->increment('cities_count');	     
	     $city->country->increment('cities_count');	     
	});

	static::deleting(function($city) {
	    $city->addresses->each->delete();
	});

	static::deleted(function($city) {
	    if($city->county) {
	        $city->county->decrement('cities_count');
	    }
	    $city->province->decrement('cities_count');	    
	    $city->country->decrement('cities_count');
	});
    }
    
    //
    public function path()
    {
	return '/cities/' . $this->id;
    }

    //
    public function county()
    {
        return $this->belongsTo(County::class);
    }

    //
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    //
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
