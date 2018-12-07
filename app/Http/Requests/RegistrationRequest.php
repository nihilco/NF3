<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Contact;
use App\Models\Name;
use App\Models\User;
use App\Models\Role;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
	//dd($this->request);
	$thirteen = \Carbon\Carbon::now()->subYear(13)->format('m/d/Y');
	
        return [
	    'name' => 'required|min:3|max:100',
	    'email' => 'required|email|max:150|unique:users,email',
	    'password' => 'required|confirmed|min:8',
	    'password_confirmation' => 'required|same:password|min:8',
	    //'dob' => 'required|date|before_or_equal:' . $thirteen,
	    //'tos' => 'accepted',
        ];
    }

    public function process()
    {
	$names = explode(" ", request('name'));
	
        //
	$name = new Name();

	$c = count($names);
	
	if($c == 2) {

	    $name->first = $names[0];
	    $name->nickname = $names[0];
	    $name->last = $names[1];

	}elseif($c == 3) {

	    $name->first = $names[0];
	    $name->nickname = $names[0];
	    $name->middle = $names[1];
	    $name->last = $names[2];

	}

	$name->creator_id = 1;
	$name->owner_id = 1;
	
	$name->save();

	//
        $contact = new Contact();
	$contact->name_id = $name->id;
	$contact->creator_id = 1;
	$contact->owner_id = 1;
	$contact->website_id = config('app.website')->id ?? 1;
	$contact->save();

	//
        $user = new User();

	$emailParts = explode('@', request('email'));

	//
	$user->slug = $emailParts[0];
	$user->email = request('email');
	$user->contact_id = $contact->id;
	$user->password = \Hash::make(request('password'));
	$user->dob_at = new \Carbon\Carbon(request('dob'));
	$user->accepted_tos_at = \Carbon\Carbon::now();

	$user->save();

        $user->roles()->save(Role::where('name', 'User')->first());

	\Mail::to($user->email)
            ->send(new \App\Mail\User\Registered($user));

	return $user;
    }
}
