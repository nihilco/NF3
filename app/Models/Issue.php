<?php

namespace App\Models;

use App\Traits\Repliable;

class Issue extends Base
{
    use Repliable;
    
    //
    public function path()
    {
        return '/issues/' . $this->id;
    }

    //
    //public function getRouteKeyName()
    //{
    //	return 'slug';
    //}

    public function replies()
    {
        return $this->morphMany(Reply::class, 'repliable');
    }

    public function assignee()
    {
	return $this->belongsTo(User::class);
    }

    public function type()
    {
	return $this->belongsTo(Type::class);
    }

    public function status()
    {
	return $this->belongsTo(Type::class);
    }

    public function priority()
    {
	return $this->belongsTo(Type::class);
    }

    public function resolution()
    {
	return $this->belongsTo(Type::class);
    }
}
