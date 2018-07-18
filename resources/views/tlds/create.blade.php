@extends('layouts.admin')

@section('title', 'Create TLD')

@section('meta', '')

{{ Breadcrumbs::push('TLDs', url('/tlds') ) }}
{{ Breadcrumbs::push('Create') }}

@section('content')

                  <form method="POST" action="{{ url('/tlds') }}">
		    {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create TLD</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}"/>
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="name">Domain</label>
                      <input type="text" class="form-control{{ $errors->first('domain') ? ' is-invalid' : '' }}" id="domain" name="domain" value="{{ old('domain') }}" />
		      @if($errors->first('domain'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('domain') }}</small>
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