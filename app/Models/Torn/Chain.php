<?php

namespace App\Models\Torn;

use App\Models\Base;

class Chain extends Base
{
    //
    protected $table = 'torn_chains';
    
    //
    public function path()
    {
	return '/torn/chains/' .$this->id();
    }

    //
    public function faction()
    {
        return $this->belongsTo(Faction::class);
    }

    public function players()
    {
	return null;
    }

    public function attacks()
    {
	return null;
    }
}
