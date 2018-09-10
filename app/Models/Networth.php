<?php

namespace App\Models;

class Networth extends Base
{
    //
    public static function boot()
    {
         parent::boot();
    }

    //
    public function path()
    {
	return '/networths/' . $this->id;
    }

    //
    public function player()
    {
	return $this->belongsTo(Player::class);
    }
}
