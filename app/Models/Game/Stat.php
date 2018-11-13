<?php

namespace App\Models\Game;

use App\Models\Base;

class Stat extends Base
{
    //
    protected $table = 'game_stats';
    
    //
    public function path()
    {
        return "/game/stats/" . $this->id;
    }

    //
    public function getFullRefreshStringAttribute()
    {
        return number_format($this->refresh) . " / " . number_format($this->refresh_rate) . " " . $this->refresh_rate_unit;
    }
}
