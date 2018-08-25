<?php

namespace App\Models;

class Hunt extends Base
{
    //
    public function path()
    {
	return '/hunts/' . $this->id;
    }
}
