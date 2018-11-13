<?php

namespace App\Models\Game;

use App\Models\Base;

class Item extends Base
{
    //
    protected $table = 'game_items';
    
    //
    public function path()
    {
        return "/game/items/" . $this->id;
    }

    //
    public function type()
    {
	return $this->belongsTo(\App\Models\Type::class);
    }
}
