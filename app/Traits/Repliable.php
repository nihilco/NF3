<?php

namespace App\Traits;

trait Repliable
{
    public static function bootRepliable()
    {
    
    }
    
    public function replies()
    {
        return $this->morphMany(\App\Models\Reply::class, 'repliable');
    }
}