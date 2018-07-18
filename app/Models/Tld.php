<?php

namespace App\Models;

class Tld extends Base
{
    //
    public function path()
    {
        return '/tlds/' . $this->id;
    }

    //
    public function domains()
    {
	return $this->hasMany(Domain::class);
    }
}
