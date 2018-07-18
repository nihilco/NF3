@extends('layouts.blank')

@section('title', 'Login')

@section('meta', '')

{{ Breadcrumbs::push('Login') }}

@section('content')

<div class="container">

  <div class="row justify-content-md-center mt-5" style="">
    <div class="col-md-5" style="background-color:#FFFFFF;">
      <div class="card" style="border:0;">
        <div class="card-body">
	  <h1>Login</h1>

	  <p>Sign in to your account.</p>

          <form method="POST" action="{{ route('login') }}">
	    {{ csrf_field() }}
            <div class="form-group">
              <label for="email">Email</label>
              <div class="input-group{{ $errors->first('email') ? ' is-invalid' : '' }}">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="email-addon"><i class="fas fa-user"></i></span>
                </div>
	        <input type="text" class="form-control" id="email" name="email" aria-label="Email" aria-describedby="email-addon" />
	      </div>
	      @if($errors->first('email'))
	      <small id="emailHelp" class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
	      @endif
	    </div>
  	    <div class="form-group">
	      <label for="password">Password</label>
              <div class="input-group{{ $errors->first('password') ? ' is-invalid' : '' }}">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="password-addon"><i class="fas fa-lock"></i></span>
                </div>
	        <input type="password" class="form-control" id="password" name="password" aria-label="Password" aria-describedby="password-addon">
	      </div>
	      @if($errors->first('password'))
	      <small id="passwordHelp" class="form-text invalid-feedback">{{ $errors->first('password') }}</small>
	      @endif
	    </div>
	    <div class="row">
	      <div class="col-sm-6">
	        <button type="submit" class="btn btn-primary">Login</button>
	      </div>
	      <div class="col-sm-6 text-right">
	        <a href="#" class="btn btn-link">Forgot Password?</a>
	      </div>
	    </div>  	    
	  </form>

	</div>
      </div>
    </div>
    <div class="col-md-4 text-center" style="background-color:#187da0;">
      <div class="card" style="background-color:#187da0;border:0;color:#FFFFFF;">
        <div class="card-body">
	  <h2>Signup</h2>
	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	  <a href="{{ route('signup') }}" class="btn btn-primary active mt-3">Signup Now!</a>
	</div>
      </div>
    </div>
  </div>
  
</div>

@endsection