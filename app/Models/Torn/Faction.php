<?php

namespace App\Models\Torn;

use App\Models\Base;

class Faction extends Base
{
    //
    protected $table = 'torn_factions';

    //
    public function path()
    {
	return '/torn/factions/' . $this->id;
    }

    public function leader()
    {
	return $this->belongsTo(Player::class, 'leader_player_id');
    }

    public function coleader()
    {
	return $this->belongsTo(Player::class, 'coleader_player_id');
    }
}
