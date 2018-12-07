<?php

namespace App\Models\Torn;

use App\Models\Base;

class Item extends Base
{
    //
    protected $table = 'torn_items';

    //
    public function path()
    {
        return '/torn/items/' . $this->id;
    }

    //
    public function tornPath()
    {
        return 'https://www.torn.com/items.php?XID=' . $this->torn_id;
    }
}
