<?php

namespace App\Models;

class Tag extends Base
{
    //
    public function path()
    {
         return '/tags/' . $this->slug;
    }

    //
    public function getRouteKeyName()
    {
	return 'slug';
    }

    public function taggable()
    {
        return $this->morphTo();
    }
}
