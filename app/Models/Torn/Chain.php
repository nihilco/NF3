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
	return '/torn/chains/' .$this->torn_id;
    }

    //
    public function getRouteKeyName()
    {
	return 'torn_id';
    }

    //
    public function faction()
    {
        return $this->belongsTo(Faction::class, 'faction_id', 'torn_id');
    }

    public function players()
    {
	return null;
    }

    public function attacks()
    {
	//return Attack::where('started_at', '>=', $this->started_at)->where('ended_at', '<=', $this->ended_at)->get();
	return null;
    }
}
