<?php

namespace App\Models;

class Role extends Base
{
    //
    public function path()
    {
        return "/roles/" . $this->id;
    }

    //
    public function users()
    {
	return $this->belongsToMany(User::class);
    }
}
