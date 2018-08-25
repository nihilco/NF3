<?php

namespace App\Models;

class Post extends Base
{
    //
    public function path()
    {
	return '/posts/' . $this->slug;
    }
}
