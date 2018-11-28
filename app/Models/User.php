<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
	'remember_token',
	'api_key',
    ];

    //
    protected $dates = [
      'created_at',
      'updated_at',
      'deleted_at',
      'dob_at',
      'last_login_at',
      'email_confirmed_at',
    ];

    protected $appends = ['avatar_url'];

    public static function boot()
    {
        parent::boot();
	
        static::creating(function ($user) {
	    if($user->username == null || $user->username == '') {
	        $user->username = $user->email;
	    }
	    $user->api_key = str_random(60);
	});

	static::created(function ($user) {
	    //
		
            // Create Avatar
            $avatar = \Avatar::create($user->email)->getImageObject()->encode('png');
            \Storage::put('avatars/' . $user->id . '/avatar.png', (string) $avatar);
	});
    }

    //
    public function getRouteKeyName()
    {
	return 'slug';
    }

    public function generateApiKey()
    {
        $this->api_key = str_random(60);
        return $this->save();
    }

    //
    public function path()
    {
	return '/users/' . $this->getRouteKey();
    }

    //
    public function name()
    {
	return $this->belongsTo(Name::class);
    }

    //
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function getAvatarUrlAttribute()
    {
        return \Storage::url('avatars/' . $this->id . '/' .$this->avatar);
    }

    public function roles()
    {
	return $this->belongsToMany(Role::class);
    }

    /**
     * @param string|array $roles
     */
    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) ||
	    abort(401, 'This action is unauthorized.');
	}

	return $this->hasRole($roles) || abort(401, 'This action is unauthorized.');
    }
    
    /**
     * Check multiple roles
     * @param array $roles
     */
    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn(‘name’, $roles)->first();
    }

    /**
     * Check one role
     * @param string $role
     */
    public function hasRole($role)
    {
        return null !== $this->roles()->where(‘name’, $role)->first();
    }
}
