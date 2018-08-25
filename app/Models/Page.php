<?php

namespace App\Models;

class Page extends Base
{
    //
    public function path()
    {
	return $this->slug;
    }
}
