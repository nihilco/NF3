<?php

namespace App\Models;

class Account extends Base
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'stripe_secret_key',
    ];

    //
    public function path()
    {
	return '/accounts/' . $this->id;
    }
}
