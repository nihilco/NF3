<?php

namespace App\Models;

class StatusCheck extends Base
{
    //
    public function path()
    {
	return '/status-checks/' . $this->id;
    }
}
