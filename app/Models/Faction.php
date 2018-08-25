<?php

namespace App\Models;

class Faction extends Base
{
    //
    public function path()
    {
	return '/factions/' . $this->id;
    }
}
