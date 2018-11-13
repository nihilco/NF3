<?php

namespace App\Models\Torn;

use App\Models\Base;

class Chain extends Base
{
    //
    public function path()
    {
	return '/chains/' .$this->id();
    }
}
