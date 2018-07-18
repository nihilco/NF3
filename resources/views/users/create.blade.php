@extends('layouts.admin')

@section('title', 'Create User')

@section('meta', '')

{{ Breadcrumbs::push('Users', url('/users') ) }}
{{ Breadcrumbs::push('Create') }}

@section('content')

                  <form method="POST" action="{{ url('/users') }}">
		    {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create User</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control{{ $errors->first('username') ? ' is-invalid' : '' }}" id="username" name="username" value="{{ old('username') }}" />
		      @if($errors->first('username'))
		      <small id="usernameHelp" class="form-text invalid-feedback">{{ $errors->first('username') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control{{ $errors->first('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" />
		      @if($errors->first('email'))
		      <small id="emailHelp" class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
		      @endif
	            </div>		    
		    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control{{ $errors->first('password') ? ' is-invalid' : '' }}" id="password" name="password" value="{{ old('password') }}" />
		      @if($errors->first('password'))
		      <small id="passwordHelp" class="form-text invalid-feedback">{{ $errors->first('password') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="username">Birthday</label>
                      <input type="text" class="form-control{{ $errors->first('dob') ? ' is-invalid' : '' }}" id="dob" name="dob" value="{{ old('dob') }}" />
		      @if($errors->first('dob'))
		      <small id="dobHelp" class="form-text invalid-feedback">{{ $errors->first('dob') }}</small>
		      @endif
	            </div>
		</div>
		<div class="card-footer text-muted">
                  <button type="submit" class="btn btn-primary">Create</button>
                  <button type="reset" class="btn btn-link">Reset</button>
		</div>
	      </div>
		  </form>

@endsection