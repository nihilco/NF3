<?php

namespace App\Models;

class Customer extends Base
{
    //
    public function path()
    {
        return '/customers/' . $this->id;
    }

    public function account()
    {
	return $this->belongsTo(Account::class);
    }
}
