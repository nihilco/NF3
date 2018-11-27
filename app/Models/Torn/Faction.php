<?php

namespace App\Models\Torn;

use App\Models\Base;

class Faction extends Base
{
    //
    public function path()
    {
	return '/torn/factions/' . $this->id;
    }
}
