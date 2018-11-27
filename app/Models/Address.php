<?php

namespace App\Models;

class Address extends Base
{
    //
    public static function boot()
    {
        parent::boot();

	static::created(function($address) {
	     $address->city->increment('addresses_count');
	     $address->province->increment('addresses_count');	     
	     $address->country->increment('addresses_count');	     
	});

	static::deleted(function($address) {
	    $address->city->decrement('addresses_count');
	    $address->province->decrement('addresses_count');	    
	    $address->country->decrement('addresses_count');
	});
    }

    //
    public function path()
    {
	return '/addresses/' . $this->id;
    }

    public function name()
    {
	return $this->belongsTo(Name::class);
    }

    public function city()
    {
	return $this->belongsTo(City::class);
    }

    public function province()
    {
	return $this->belongsTo(Province::class);
    }

    public function country()
    {
	return $this->belongsTo(Country::class);
    }

    public function contact()
    {
        return $this->belongsToMany(Contact::class, 'contact_address');
    }
}
