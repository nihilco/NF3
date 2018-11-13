<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BasePolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->id == 1) {
            return true;
	}
    }
}
