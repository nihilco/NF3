<?php

namespace App\Models;

class Product extends Base
{
    //
    public function path()
    {
        return '/product/' . $this->id;
    }
}
