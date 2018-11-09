<?php

namespace App\Models;

class Link extends Base
{
    //
    public function path()
    {
        return "/link/" . $this->slug;
    }
}
