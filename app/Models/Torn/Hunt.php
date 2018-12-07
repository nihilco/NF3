<?php

namespace App\Models\Torn;

use App\Models\Base;

class Hunt extends Base
{
    //
    protected $table = 'torn_hunts';

    //
    public function path()
    {
	return '/torn/hunts/' . $this->id;
    }
}
