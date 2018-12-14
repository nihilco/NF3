<?php

namespace App\Models\Torn;

use App\Models\Base;

class Attack extends Base
{
    //
    protected $table = 'torn_attacks';

    //
    public function path()
    {
	return '/torn/attacks/' . $this->torn_id;
    }

    //
    public function getRouteKeyName()
    {
	return 'torn_id';
    }

    public function attacker()
    {
	return $this->belongsTo(Player::class, 'attacker_player_id', 'torn_id');
    }
    
    public function defender()
    {
	return $this->belongsTo(Player::class, 'defender_player_id', 'torn_id');
    }


    public function attackerFaction()
    {
	return $this->belongsTo(Player::class, 'attacker_faction_id', 'torn_id');
    }


    public function defenderFaction()
    {
	return $this->belongsTo(Player::class, 'defender_faction_id', 'torn_id');
    }
}
