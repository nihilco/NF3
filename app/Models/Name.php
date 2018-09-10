<?php

namespace App\Models;

class Name extends Base
{
    //
    public static function boot()
    {
         parent::boot();
    }

    //
    public function path()
    {
	return '/names/' . $this->id;
    }
}
