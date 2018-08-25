<?php

namespace App\Models;

class City extends Base
{
    //
    public function path()
    {
	return '/cities/' . $this->id;
    }
}
