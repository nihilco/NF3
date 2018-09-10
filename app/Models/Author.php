<?php

namespace App\Models;

class Author extends Base
{
    //
    public function path()
    {
        return '/authors/' . $this->slug;
    }

    //
    public function getRouteKeyName()
    {
	return 'slug';
    }
}
