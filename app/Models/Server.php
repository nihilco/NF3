<?php

namespace App\Models;

class Server extends Base
{
    //
    public function path()
    {
	return '/servers/' . $this->id;
    }
}
