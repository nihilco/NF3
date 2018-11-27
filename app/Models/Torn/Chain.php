<?php

namespace App\Models\Torn;

use App\Models\Base;

class Chain extends Base
{
    //
    public function path()
    {
	return '/torn/chains/' .$this->id();
    }
}
