<?php

namespace App\Models;

class Works extends Base
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
