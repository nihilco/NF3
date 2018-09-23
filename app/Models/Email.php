<?php

namespace App\Models;

class Email extends Base
{
    //
    public function path()
    {
        return '/emails/' . $this->id;
    }

    //
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    //
    public function mailbox()
    {
        return $this->belongsTo(Mailbox::class);
    }
}
