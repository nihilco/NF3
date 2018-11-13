<?php

namespace App\Models;

class Invoice extends Base
{
    //
    protected $dates = [
        'created_at',
	'updated_at',
	'deleted_at',
	'due_at',
	'opened_at',
	'paid_at',
    ];

    //
    public function getRouteKeyName()
    {
	return 'slug';
    }

    //
    public function path()
    {
	return '/invoices/' . $this->slug;
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
    public function billingContact()
    {
	return $this->belongsTo(Contact::class);
    }
    
    //
    public function shippingContact()
    {
	return $this->belongsTo(Contact::class);
    }

    //
    public function items()
    {
	return $this->hasMany(InvoiceItem::class);
    }

    //
    public function transactions()
    {
	return $this->hasMany(Transaction::class);
    }

    //
    public function payments()
    {
	return $this->transactions()->where('type', 'payment');
    }

    public function addItem($name, $description, $unitPrice, $units = 1, $taxable = false)
    {
	return $this->items()->create([
	    'creator_id' => $this->creator_id,
	    'owner_id' => $this->owner_id,
	    'name' => $name,
	    'description' => $description,
	    'unit_price' => $unitPrice,
	    'units' => $units,
	    'taxable' => $taxable,
	    'subtotal' => $unitPrice * $units,
	]);
    }
}
