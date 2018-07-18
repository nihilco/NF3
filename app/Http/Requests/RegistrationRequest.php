<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

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
	    'dob' => 'required|date|before_or_equal:' . $thirteen,
	    'tos' => 'accepted',
        ];
    }

    public function process()
    {
	$user = new User();

	$user->email = request('email');
	$user->name = request('name');
	$user->password = \Hash::make(request('password'));
	$user->dob_at = new \Carbon\Carbon(request('dob'));
	$user->accepted_tos_at = \Carbon\Carbon::now();

	$user->save();

	return $user;
    }
}
