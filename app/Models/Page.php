<?php

namespace App\Models;

class Page extends Base
{
    //
    public $dates = ['published_at', 'created_at', 'updated_at', 'deleted_at'];
    
    //
    public function path()
    {
	return $this->slug;
    }

    //
    public function getRouteKeyName()
    {
	return 'slug';
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
