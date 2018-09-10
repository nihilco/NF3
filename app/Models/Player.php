<?php

namespace App\Models;

class Player extends Base
{
    //
    public function path()
    {
        return '/players/' . $this->id;
    }

    //
    public function tornPath()
    {
        return 'https://www.torn.com/profiles.php?XID=' . $this->torn_id;
    }
}
