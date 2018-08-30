<?php

namespace App\Models;

class Tld extends Base
{
    public static function boot()
    {
        parent::boot();

	static::deleting(function($tld) {
	    $tld->domains->each->delete();
	});
    }
    
    //
    public function path()
    {
        return '/tlds/' . $this->id;
    }

    //
    public function domains()
    {
	return $this->hasMany(Domain::class);
    }
}
