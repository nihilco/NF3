<?php

namespace App\Models\Game;

use App\Models\Base;
use App\Models\User;

class Player extends Base
{
    //
    protected $table = 'game_players';

    //
    public function path()
    {
        return "/game/players/" . $this->id;
    }

    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stats()
    {
        return $this->hasMany(Stat::class, 'game_player_stat');
    }
}
