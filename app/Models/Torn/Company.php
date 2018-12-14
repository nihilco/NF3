<?php

namespace App\Models\Torn;

use App\Models\Base;

class Company extends Base
{
    //
    protected $table = 'torn_companies';

    //
    public function path()
    {
	return '/torn/companies/' .$this->torn_id;
    }

    //
    public function getRouteKeyName()
    {
	return 'torn_id';
    }

    public function director()
    {
	return $this->belongsTo(Player::class, 'director_player_id');
    }
}
