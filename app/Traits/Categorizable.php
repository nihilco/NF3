<?php

namespace App\Traits;

trait Categorizable
{
    public static function bootCategorizable()
    {
    
    }
    
    public function categories()
    {
        return $this->morphToMany(\App\Models\Category::class, 'categorizable');
    }
}