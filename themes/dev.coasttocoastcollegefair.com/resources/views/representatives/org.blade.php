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
      <h2 class="">Step 2 of 5</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8">

<form method="POST" action="{{ url('/representatives/register') }}">
{{ csrf_field() }}

		    <div class="form-group">
                      <label for="country">Select Organization:</label>
       		      <select class="form-control{{ $errors->first('organization') ? ' is-invalid' : '' }}" id="organization" name="organization">
		        <option></option>
			@foreach($organizations as $organization)
		        <option value="{{ $organization->id }}"{{ (old('organization') == $organization->id) ? ' selected' : '' }}>{{ $organization->name_display }}</option>
			@endforeach
		      </select>
		      @if($errors->first('organization'))
		      <small id="organizationHelp" class="form-text invalid-feedback">{{ $errors->first('organization') }}</small>
		      @endif
	            </div>

<label>or, if your organization is not in the list above:</label>
		    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>

		    <div class="form-group">
                      <label for="website">Website</label>
                      <input type="text" class="form-control{{ $errors->first('website') ? ' is-invalid' : '' }}" id="website" name="website" value="{{ old('website') }}" />
		      @if($errors->first('website'))
		      <small id="websiteHelp" class="form-text invalid-feedback">{{ $errors->first('website') }}</small>
		      @endif
	            </div>

<button type="submit" class="btn btn-primary float-left" name="action" value="back">Back</button>
<button type="submit" class="btn btn-primary float-right" name="action" value="next">Next</button>
</form>

    </div>
    <div class="col-sm-4">



    </div>
  </div>

</div>

@endsection