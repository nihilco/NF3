<?php

namespace App\Models\Game;

use App\Models\Base;

class Skill extends Base
{
    //
    protected $table = 'game_skills';
    
    //
    public function path()
    {
	return "/game/skills/" . $this->id;
    }

    //
    public function activities()
    {
	return $this->hasMany(Activity::class);
    }
}
