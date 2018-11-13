<?php

namespace App\Models\Game;

use App\Models\Base;

class Activity extends Base
{
    //
    protected $table = 'game_activities';
    
    //
    public function path()
    {
	return "/game/activities/" . $this->id;
    }

    //
    public function skill()
    {
	return $this->belongsTo(Skill::class);
    }
}
