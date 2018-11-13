<?php

namespace App\Models\Torn;

use App\Models\Base;

class Company extends Base
{
    //
    public function path()
    {
	return '/companies/' .$this->id;
    }
}
