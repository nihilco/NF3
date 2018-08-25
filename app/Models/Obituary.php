<?php

namespace App\Models;

class Obituary extends Base
{
    //
    public function path()
    {
	return '/obituaries/' . $this->id;
    }
}
