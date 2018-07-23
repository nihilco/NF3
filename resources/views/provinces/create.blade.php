@extends('layouts.admin')

@section('title', 'Create Province')

@section('meta', '')

{{ Breadcrumbs::push('Provinces', url('/provinces') ) }}
{{ Breadcrumbs::push('Create') }}

@section('content')

                  <form method="POST" action="{{ url('/provinces') }}">
		    {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Province</h5>
		</div>
		<div class="card-body">
		    <div class="form-group">
                      <label for="country">Country</label>
       		      <select class="form-control{{ $errors->first('country') ? ' is-invalid' : '' }}" id="country" name="country">
		        <option></option>
			@foreach($countries as $country)
		        <option value="{{ $country->id }}"{{ (old('country') == $country->id) ? ' selected' : '' }}>{{ $country->name }}</option>
			@endforeach
		      </select>
		      @if($errors->first('country'))
		      <small id="countryHelp" class="form-text invalid-feedback">{{ $errors->first('country') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="code">Code</label>
                      <input type="text" class="form-control{{ $errors->first('code') ? ' is-invalid' : '' }}" id="code" name="code" value="{{ old('code') }}" />
		      @if($errors->first('code'))
		      <small id="codeHelp" class="form-text invalid-feedback">{{ $errors->first('code') }}</small>
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
		      <label for="description">Description</label>
		      <textarea class="form-control{{ $errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="3">{{ old('description') }}</textarea>
		      @if($errors->first('description'))
		      <small id="descriptionHelp" class="form-text invalid-feedback">{{ $errors->first('description') }}</small>
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