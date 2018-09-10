<?php

namespace App\Models;

class Type extends Base
{
    //
    public function path()
    {
        return '/types/' . $this->id;
    }

    public function parent()
    {
	return $this->belongsTo(Type::class);
    }

    public function children()
    {
	return $this->hasMany(Type::class, 'parent_id', 'id');
    }
}
