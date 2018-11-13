<?php

namespace App\Models;

use App\Models\Base;

class Calendar extends Base
{
    //
    public function path()
    {
        return "/calendars/" . $this->id;
    }
}
