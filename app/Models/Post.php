<?php

namespace App\Models;

use App\Traits\Categorizable;
use App\Traits\Repliable;
use App\Traits\Taggable;

class Post extends Base
{
    use Categorizable, Repliable, Taggable;

    //
    public static function boot()
    {
        parent::boot();

	static::creating(function($post) {
	     $post->content = \Purifier::clean($post->content);
	});

	static::updating(function($post) {
	    $post->content = \Purifier::clean($post->content);
	});
    }

    //
    public $dates = ['published_at', 'created_at', 'updated_at', 'deleted_at'];
    
    //
    public function path()
    {
	return '/posts/' . $this->slug;
    }

    //
    public function getRouteKeyName()
    {
	return 'slug';
    }

    public function website()
    {
	return $this->belongsTo(Website::class);
    }
}
