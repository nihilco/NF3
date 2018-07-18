<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
    ];

    public static function boot()
    {
        parent::boot();
	
        static::creating(function ($user) {
	    if($user->username == null || $user->username == '') {
	        $user->username = $user->email;
	    }
	    $user->api_key = str_random(60);
	});
    }

    public function generateApiKey()
    {
        $this->api_key = str_random(60);
        return $this->save();
    }

    //
    public function path()
    {
	return '/users/' . $this->id;
    }
}
