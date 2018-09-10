<?php

namespace App\Models;

class OrderItem extends Base
{
    //
    public function path()
    {
        return '/order-items/' . $this->id;
    }
}
