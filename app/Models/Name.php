<?php

namespace App\Models;

class Name extends Base
{
    //
    public function path()
    {
	return '/names/' . $this->id;
    }
}
