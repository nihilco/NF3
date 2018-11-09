<?php

namespace App\Models;

class Participant extends Base
{
    //
    public function path()
    {
        //
	return "/participants/" . $this->id;
    }

    //
    public function event()
    {
	//
	return $this->belongsTo(Event::class);
    }
}
