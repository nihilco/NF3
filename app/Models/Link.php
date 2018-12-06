<?php

namespace App\Models;

class Link extends Base
{
    //
    public function path()
    {
        return "/links/" . $this->slug;
    }

    //
    public function getRouteKeyName()
    {
	return 'slug';
    }
}
