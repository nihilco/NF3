<?php

namespace App\Models;

class Company extends Base
{
    //
    public function path()
    {
	return '/companies/' .$this->id;
    }
}
