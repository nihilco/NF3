<?php

namespace App\Models;

class Mailbox extends Base
{
    //
    public function path()
    {
        return '/mailboxes/' . $this->id;
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
}
