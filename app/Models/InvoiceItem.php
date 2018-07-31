<?php

namespace App\Models;

class InvoiceItem extends Base
{
    //
    public static function boot()
    {
        parent::boot();

	static::created(function($item) {
	    $item->invoice->increment('line_items_count');
	});

	static::deleted(function($item) {
	    $item->invoice->decrement('line_items_count');
	});
    }

    //
    public function path()
    {
	return '/invoice-items/' . $this->id;
    }

    //
    public function invoice()
    {
	return $this->belongsTo(Invoice::class);
    }
}
