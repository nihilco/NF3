<?php

namespace App\Models;

class Attack extends Base
{
    //
    public function path()
    {
	return '/attacks/' . $this->id;
    }
}
