<?php

namespace App\Models;

class Address extends Base
{
    //
    public function path()
    {
	return '/addresses/' . $this->id;
    }

    public function province()
    {
	return $this->belongsTo(Province::class);
    }

    public function country()
    {
	return $this->belongsTo(Country::class);
    }
}
