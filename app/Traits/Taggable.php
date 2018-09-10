<?php

namespace App\Traits;

trait Taggable
{
    public static function bootTaggable()
    {
    
    }
    
    public function tags()
    {
        return $this->morphToMany(\App\Models\Tag::class, 'taggable');
    }
}