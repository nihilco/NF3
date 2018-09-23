<?php

namespace App\Models;

class Work extends Base
{
    //
    public function path()
    {
        return '/works/' . $this->slug;
    }

    //
    public function getRouteKeyName()
    {
	return 'slug';
    }
}
