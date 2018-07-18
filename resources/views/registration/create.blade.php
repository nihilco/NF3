@extends('layouts.blank')

@section('title', 'Login')

@section('meta', '')

{{ Breadcrumbs::push('Signup') }}

@section('content')

<div class="container">

  <div class="row justify-content-md-center mt-5">
    <div class="col-md-5" style="background-color:#FFFFFF;">
      <div class="card" style="border:0;">
        <div class="card-body">
	  <h1>Signup</h1>

          <form method="POST" action="{{ route('signup') }}">
	    {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Name</label>
              <div class="input-group{{ $errors->first('name') ? ' is-invalid' : '' }}">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="name-addon"><i class="fas fa-user"></i></span>
                </div>
	        <input type="text" class="form-control" id="name" name="name" aria-label="Name" aria-describedby="name-addon" value="{{ old('name') }}" />
	      </div>
	      @if($errors->first('name'))
	      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
	      @endif
	    </div>
	    <div class="form-group">
              <label for="email">Email</label>
              <div class="input-group{{ $errors->first('email') ? ' is-invalid' : '' }}">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="email-addon"><i class="fas fa-envelope"></i></span>
                </div>
	        <input type="text" class="form-control" id="email" name="email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email') }}" />
	      </div>
	      @if($errors->first('email'))
	      <small id="emailHelp" class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
	      @endif
	    </div>
  	    <div class="form-group">
	      <label for="password">Password</label>
              <div class="input-group{{ $errors->first('password') ? ' is-invalid' : '' }}">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="password-addon"><i class="fas fa-lock-open"></i></span>
                </div>
	        <input type="password" class="form-control" id="password" name="password" aria-label="Password" aria-describedby="password-addon" />
	      </div>
	      @if($errors->first('password'))
	      <small id="passwordHelp" class="form-text invalid-feedback">{{ $errors->first('password') }}</small>
	      @endif
	    </div>
	    <div class="form-group">
	      <label for="passwordConfirmation">Confirm Password</label>
              <div class="input-group{{ $errors->first('password_confirmation') ? ' is-invalid' : '' }}">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="password_confirmation-addon"><i class="fas fa-lock"></i></span>
                </div>
	        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" aria-label="Password Confirmation" aria-describedby="password_confirmation-addon" />
	      </div>
	      @if($errors->first('password_confirmation'))
	      <small id="passwordConfirmationHelp" class="form-text invalid-feedback">{{ $errors->first('password_confirmation') }}</small>
	      @endif
	    </div>
	    <div class="form-group">
	      <label for="dob">Birthday</label>
              <div class="input-group{{ $errors->first('dob') ? ' is-invalid' : '' }}">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="dob-addon"><i class="fas fa-calendar"></i></span>
                </div>
	        <input type="text" class="form-control" id="dob" name="dob" aria-label="Birthday" aria-describedby="dob-addon" value="{{ old('dob') }}"/>
	      </div>
	      @if($errors->first('dob'))
	      <small id="dobHelp" class="form-text invalid-feedback">{{ $errors->first('dob') }}</small>
	      @endif
	    </div>
	    <div class="form-group form-check">
              <input type="checkbox" class="form-check-input{{ $errors->first('tos') ? ' is-invalid' : '' }}" id="tos" name="tos"{{ old('tos') == 'on' ? ' checked' : '' }}/>
    	      <label class="form-check-label" for="tos">I have both read and accept the <a href="{{ url('/legal/terms') }}">Terms of Service</a>.</label>
	      @if($errors->first('tos'))
	      <small id="tosHelp" class="form-text invalid-feedback">{{ $errors->first('tos') }}</small>
	      @endif
	    </div>
	      <button type="submit" class="btn btn-primary">Submit</button>
	  </form>

	</div>
      </div>
    </div>
    <div class="col-md-4 text-center" style="background-color:#187da0;">
      <div class="card" style="background-color:#187da0;border:0;color:#FFFFFF;">
        <div class="card-body">
	  <h2>Already Have an Account</h2>
	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	  <a href="{{ route('login') }}" class="btn btn-primary active mt-3">Login Now!</a>
	</div>
      </div>
    </div>
  </div>
  
</div>

@endsection