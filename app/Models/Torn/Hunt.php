<?php

namespace App\Models\Torn;

use App\Models\Base;

class Hunt extends Base
{
    //
    public function path()
    {
	return '/torn/hunts/' . $this->id;
    }
}
