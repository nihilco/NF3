<?php

namespace App\Models;

class Contact extends Base
{
    //
    public function path() {
        return '/contacts/' . $this->id;
    }

    public function organizations()
    {
        return $this->belongsToMany(Organization::class, 'contact_organization');
    }

    public function addresses()
    {
        return $this->belongsToMany(Address::class, 'contact_address');
    }

    public function name()
    {
        return $this->belongsTo(Name::class);
    }
}
