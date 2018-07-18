@extends('layouts.admin')

@section('title', 'Edit User')

@section('meta', '')

{{ Breadcrumbs::push('Users', url('/users') ) }}
{{ Breadcrumbs::push('Edit') }}

@section('content')

                  <form method="POST" action="{{ url($user->path()) }}">
		    {{ csrf_field() }}
		    {{ method_field('PATCH') }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Edit User</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control{{ $errors->first('username') ? ' is-invalid' : '' }}" id="username" name="username" value="{{ old('username') ?? $user->username }}" />
		      @if($errors->first('username'))
		      <small id="usernameHelp" class="form-text invalid-feedback">{{ $errors->first('username') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control{{ $errors->first('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') ?? $user->email }}" />
		      @if($errors->first('email'))
		      <small id="emailHelp" class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
		      @endif
	            </div>		    
		    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') ?? $user->name}}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="username">Birthday</label>
                      <input type="text" class="form-control{{ $errors->first('dob') ? ' is-invalid' : '' }}" id="dob" name="dob" value="{{ old('dob') ?? $user->dob_at->format('m/d/Y') }}" />
		      @if($errors->first('dob'))
		      <small id="dobHelp" class="form-text invalid-feedback">{{ $errors->first('dob') }}</small>
		      @endif
	            </div>
		</div>
		<div class="card-footer text-muted">
                  <button type="submit" class="btn btn-primary">Edit</button>
                  <button type="reset" class="btn btn-link">Reset</button>
		</div>
	      </div>
		  </form>

@endsection