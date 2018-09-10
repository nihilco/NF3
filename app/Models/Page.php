<?php

namespace App\Models;

use App\Traits\Categorizable;

class Page extends Base
{
    use Categorizable;

    //
    public $dates = [
        'published_at',
	'created_at',
	'updated_at',
	'deleted_at'
    ];
    
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

    public function website()
    {
	return $this->belongsTo(Website::class);
    }
}
