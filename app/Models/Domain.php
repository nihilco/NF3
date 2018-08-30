<?php

namespace App\Models;

class Domain extends Base
{
    //
    public static function boot()
    {
        parent::boot();

	static::created(function($domain) {
	    $domain->tld->increment('domains_count');
	});

	static::deleting(function($domain) {
	    $domain->websites->each->delete();
	    $domain->zones->each->delete();
	});

	static::deleted(function($domain) {
	    $domain->tld->decrement('domains_count');
	});
    }

    //
    protected $dates = [
        'created_at',
	'updated_at',
	'deleted_at',
	'registered_at',
	'last_renewed_at',
	'renews_at',
    ];

    //
    public function path()
    {
        return '/domains/' . $this->id;
    }

    //
    public function tld()
    {
        return $this->belongsTo(Tld::class);
    }

    //
    public function websites()
    {
	return $this->hasMany(Website::class);
    }

    //
    public function zones()
    {
	return $this->hasMany(Zone::class);
    }
}
