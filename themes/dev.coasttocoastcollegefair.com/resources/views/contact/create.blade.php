@extends('layouts.main')

@section('title', 'Contact')

@section('meta', '')

{{ Breadcrumbs::push('Contact') }}

@section('content')

<div class="container">

  <div class="row">
    <div class="col-12">
      <h1 class="page-title">Contact</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8">

    <p>We are always happy to be of assistance to College Representatives, students and parents and welcome your inquiries. Our contact information is listed to the right or use the form below:</p>

	@if(\Session::has('message'))
	<!-- Alerts Here -->
	<div class="alert-box">
	  <div class="alert {{ \Session::get('alert-class', 'alert-info') }} fade show" role="alert">
	    <strong>
	    @php
	      if(\Session::get('alert-class') == 'alert-success') {
	        echo "<i class='fas fa-check'></i> Success: ";
	      } elseif (\Session::get('alert-class') == 'alert-warning') {
	        echo '<i class="fas fa-exclamation-triangle"></i> Warning: ';
	      } elseif (\Session::get('alert-class') == 'alert-danger') {
	        echo '<i class="fas fa-exclamation-triangle"></i> Danger: ';
	      } else {
	        echo '<i class="fas fa-info-circle"></i> Info: ';
	      }
	    @endphp
  	    </strong> {{ \Session::get('message') }}
	  </div>
	</div>
	@endif

            <form method="POST" action="{{ url('/contact') }}" class="mb-2">
              {{ csrf_field() }}
		    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
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
		      <label for="message">Message</label>
		      <textarea class="form-control{{ $errors->first('message') ? ' is-invalid' : '' }}" id="message" name="message" rows="3">{{ old('message') }}</textarea>
		      @if($errors->first('message'))
		      <small id="messageHelp" class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
		      @endif
		    </div>
                  <button type="submit" class="btn btn-primary">Send Message</button>
                  <button type="reset" class="btn btn-link">Reset</button>
		  </form>

    </div>
    <div class="col-sm-4">

      @include('partials.reps-list')

      @include('partials.contact')

    </div>
  </div>

</div>

@endsection