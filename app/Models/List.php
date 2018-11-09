<?php

namespace App\Models;

class List extends Base
{
    //
    public function path()
    {
        return "/list/" . $this->id;
    }
}
