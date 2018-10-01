<?php

namespace App\Models;

class Name extends Base
{
    //
    public static function boot()
    {
         parent::boot();
    }

    //
    public function path()
    {
	return '/names/' . $this->id;
    }

    //
    public function getFullNameAttribute($prefix = false, $suffix = false)
    {
	$ret = '';
	if($prefix) {
	    $ret .= "{$this->prefix} ";
	}
        $ret .= "{$this->first_name} {$this->middleInitial}. {$this->last_name}";
	if($suffix) {
	    $ret .= "{$this->suffix} ";
	}
	return $ret;
    }

    //
    public function getMiddleInitialAttribute()
    {
	// mb_substr($str, 0, 1, 'utf-8')
        return ucfirst(mb_substr($this->middle, 0, 1));
    }
}
