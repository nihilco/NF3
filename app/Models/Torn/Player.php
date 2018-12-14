<?php

namespace App\Models\Torn;

use App\Models\Base;

class Player extends Base
{
    //
    protected $table = 'torn_players';

    //
    public function path()
    {
        return '/torn/players/' . $this->torn_id;
    }

    //
    public function getRouteKeyName()
    {
	return 'torn_id';
    }

    //
    public function tornPath()
    {
        return 'https://www.torn.com/profiles.php?XID=' . $this->torn_id;
    }
}
