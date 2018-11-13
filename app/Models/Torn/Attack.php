<?php

namespace App\Models\Torn;

use App\Models\Base;

class Attack extends Base
{
    //
    public function path()
    {
	return '/attacks/' . $this->id;
    }
}
