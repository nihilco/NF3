@extends('layouts.main')

@section('title', 'Registration')

@section('meta', '')

{{ Breadcrumbs::push('Representatives', url('/representatives')) }}
{{ Breadcrumbs::push('Registration') }}

@section('content')

<div class="container pb-2">

  <div class="row">
    <div class="col-12">
      <h1 class="page-title">Representative Registration</h1>
      <h2 class="">Step 3 of 5</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8">

<form method="POST" action="{{ url('/representatives/register') }}">
{{ csrf_field() }}
		    <div class="form-group">
                      <label for="first">First Name</label>
                      <input type="text" class="form-control{{ $errors->first('first') ? ' is-invalid' : '' }}" id="first" name="first" value="{{ old('first') }}" />
		      @if($errors->first('first'))
		      <small id="firstHelp" class="form-text invalid-feedback">{{ $errors->first('first') }}</small>
		      @endif
	            </div>

		    <div class="form-group">
                      <label for="last">Last Name</label>
                      <input type="text" class="form-control{{ $errors->first('last') ? ' is-invalid' : '' }}" id="last" name="last" value="{{ old('last') }}" />
		      @if($errors->first('last'))
		      <small id="lastHelp" class="form-text invalid-feedback">{{ $errors->first('last') }}</small>
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
                      <label for="additional">Additional Representatives</label>
       		      <select class="form-control{{ $errors->first('additional') ? ' is-invalid' : '' }}" id="additional" name="additional">
		        <option value="0"{{ (old('additional') == 0) ? ' selected' : '' }}>0 (+$0)</option>
			<option value="1"{{ (old('additional') == 1) ? ' selected' : '' }}>1 (+$25)</option>
			<option value="2"{{ (old('additional') == 2) ? ' selected' : '' }}>2 (+$50)</option>
			<option value="3"{{ (old('additional') == 3) ? ' selected' : '' }}>3 (+$75)</option>
			<option value="4"{{ (old('additional') == 4) ? ' selected' : '' }}>4 (+$100)</option>
		      </select>
		      @if($errors->first('additional'))
		      <small id="additionalHelp" class="form-text invalid-feedback">{{ $errors->first('additional') }}</small>
		      @endif
	            </div>

		    <div class="form-group">
                      <label for="scanner">Scanner</label>
       		      <select class="form-control{{ $errors->first('scanner') ? ' is-invalid' : '' }}" id="scanner" name="scanner">
		        <option value="no"{{ (old('scanner') == 'no' || !old('scanner')) ? ' selected' : '' }}>No (+$0)</option>
			<option value="yes"{{ (old('scanner') == 'yes') ? ' selected' : '' }}>Yes (+$80)</option>
		      </select>
		      @if($errors->first('scanner'))
		      <small id="scannerHelp" class="form-text invalid-feedback">{{ $errors->first('scanner') }}</small>
		      @endif
	            </div>

                  <button type="submit" class="btn btn-primary">Next</button>
</form>

    </div>
    <div class="col-sm-4">



    </div>
  </div>

</div>

@endsection