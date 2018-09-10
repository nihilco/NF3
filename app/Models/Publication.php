<?php

namespace App\Models;

class Publication extends Base
{
    //
    public function path()
    {
        return '/publications/' . $this->id;
    }
}