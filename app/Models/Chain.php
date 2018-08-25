<?php

namespace App\Models;

class Chain extends Base
{
    //
    public function path()
    {
	return '/chains/' .$this->id();
    }
}
