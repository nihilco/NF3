<?php

namespace App\Models;

class Alias extends Base
{
    //
    public function path()
    {
        return '/alias/' . $this->id;
    }

    //
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
}
