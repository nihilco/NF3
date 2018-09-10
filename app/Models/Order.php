<?php

namespace App\Models;

class Order extends Base
{
    //
    public function path()
    {
        return '/order/' . $this->id;
    }
}
