<?php

namespace App\Models;

class Organization extends Base
{
    //
    public function path()
    {
        return '/organizations/' . $this->id;
    }

    public function contact()
    {
        return $this->belongsToMany(Contact::class, 'contact_organization');
    }
}
