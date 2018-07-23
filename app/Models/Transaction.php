<?php

namespace App\Models;

class Transaction extends Base
{
    //
    public function path()
    {
	return '/transactions/' . $this->id;
    }
    
    //
    public function account()
    {
	return $this->belongsTo(Account::class);
    }

    //
    public function customer()
    {
	return $this->belongsTo(Customer::class);
    }

    //
    public function invoice()
    {
	return $this->belongsTo(Invoice::class);
    }
}
