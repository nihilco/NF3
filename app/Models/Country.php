<?php

namespace App\Models;

class Country extends Base
{
    //
    public static function boot()
    {
         parent::boot();

	 static::deleting(function($country) {
	      $country->provinces->each->delete();
	 });
    }

    //
    public function path()
    {
	return '/countries/' . $this->id;
    }

    public function provinces()
    {
	return $this->hasMany(Province::class);
    }
}
