<?php

namespace App\Models;

class LegalCase extends Base
{
    //
    public function path()
    {
        return "/legal-case/" . $this->id;
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function status()
    {
        return $this->belongsTo(Type::class);
    }

    public function plaintiff()
    {
        return $this->belongsTo(Contact::class);
    }

    public function defendant()
    {
	return $this->belongsTo(Contact::class);
    }

    public function county()
    {
        return $this->belongsTo(County::class);
    }
}
