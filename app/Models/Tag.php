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
    
    //
    public function pages()
    {
        return $this->morphedByMany(Page::class, 'taggable');
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }
}
