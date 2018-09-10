<?php

namespace App\Models;

class Library extends Base
{
    //
    public function path()
    {
        return '/libraries/' . $this->id;
    }
}
