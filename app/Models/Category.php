<?php

namespace App\Models;

class Category extends Base
{
    //
    public function path()
    {
         return '/categories/' . $this->slug;
    }

    //
    public function getRouteKeyName()
    {
	return 'slug';
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'categorizable');
    }
}
