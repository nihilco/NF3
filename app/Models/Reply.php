<?php

namespace App\Models;

class Reply extends Base
{
    //
    public function path()
    {
	return '/replies/' . $this->id;
    }

    public function repliable()
    {
        return $this->morphTo();
    }
}
