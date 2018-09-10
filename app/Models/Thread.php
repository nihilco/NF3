<?php

namespace App\Models;

use App\Traits\Repliable;

class Thread extends Base
{
    use Repliable;
    
    //
    public function path()
    {
        return '/threads/' . $this->id;
    }

    //
    public function getRouteKeyName()
    {
	return 'slug';
    }
}
