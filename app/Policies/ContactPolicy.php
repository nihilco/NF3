<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactPolicy extends BasePolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if($user->id == 11) {
	    return true;
	}

        return parent::before($user, $ability);
    }

    /**
     * Determine whether the user can view the role.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Event  $event     
     * @return mixed
     */
    public function index(User $user)
    {
        //
	return false;
    }

    /**
     * Determine whether the user can view the role.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Event  $event
     * @return mixed
     */
    public function list(User $user)
    {
        //
	return false;
    }

    /**
     * Determine whether the user can view the role.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Event  $event
     * @return mixed
     */
    public function view(User $user, Contact $contact)
    {
        //
	return false;
    }

    /**
     * Determine whether the user can create roles.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
	return false;
    }

    /**
     * Determine whether the user can update the role.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Role  $role
     * @return mixed
     */
    public function update(User $user, Contact $contact)
    {
        //
	return false;
    }

    /**
     * Determine whether the user can delete the role.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Role  $role
     * @return mixed
     */
    public function delete(User $user, Contact $contact)
    {
        //
	return false;
    }

    /**
     * Determine whether the user can restore the role.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Role  $role
     * @return mixed
     */
    public function restore(User $user, Contact $contact)
    {
        //
	return false;
    }

    /**
     * Determine whether the user can permanently delete the role.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Role  $role
     * @return mixed
     */
    public function forceDelete(User $user, Contact $contact)
    {
        //
	return false;
    }
}
