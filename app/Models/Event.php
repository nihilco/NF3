<?php

namespace App\Models;

class Event extends Base
{
    //
    public function path()
    {
        //
	return "/events/" . $this->id;
    }

    //
    public function participants()
    {
	//
	return $this->hasMany(Participant::class);
    }
}
