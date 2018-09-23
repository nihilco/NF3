<?php

namespace App\Models;

class StatusCheck extends Base
{
    //
    public function path()
    {
	return '/status-checks/' . $this->id;
    }

    public function type()
    {
	return $this->belongsTo(Type::class);
    }

    public function resource()
    {
	return $this->morphTo();
    }

    public function status()
    {
	return $this->belongsTo(Type::class, 'status_type_id');
    }
}
