<?php

namespace App\Models\Torn;

use App\Models\Base;

class Networth extends Base
{
    //
    protected $table = 'torn_networths';

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
