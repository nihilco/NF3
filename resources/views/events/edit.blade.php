@extends('layouts.app')

@section('title', 'Edit Event')

@section('meta', '')

{{ Breadcrumbs::push('Countries', url('/events') ) }}
{{ Breadcrumbs::push('Edit') }}

@section('content')

            <form method="POST" action="{{ $event->path() }}">
	      {{ csrf_field() }}
              {{ method_field('PATCH') }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Edit Event</h5>
		</div>
		<div class="card-body">
		    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') ?? $event->name }}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>
     	            <div class="form-group">
		      <label for="description">Description</label>
		      <textarea class="form-control{{ $errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="3">{{ old('description') ?? $event->description }}</textarea>
		      @if($errors->first('description'))
		      <small id="descriptionHelp" class="form-text invalid-feedback">{{ $errors->first('description') }}</small>
		      @endif
		    </div>
                    <div class="form-group">
                      <label for="starts_at">Starts At</label>
                      <input type="text" class="form-control{{ $errors->first('starts_at') ? ' is-invalid' : '' }}" id="starts_at" name="starts_at" value="{{ old('starts_at') ?? $event->starts_at }}" />
		      @if($errors->first('code'))
		      <small id="startsAtHelp" class="form-text invalid-feedback">{{ $errors->first('starts_at') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="ends_at">Ends At</label>
                      <input type="text" class="form-control{{ $errors->first('ends_at') ? ' is-invalid' : '' }}" id="ends_at" name="ends_at" value="{{ old('ends_at') ?? $event->ends_at }}" />
		      @if($errors->first('ends_at'))
		      <small id="endsAtHelp" class="form-text invalid-feedback">{{ $errors->first('ends_at') }}</small>
		      @endif
	            </div>		    
                    <div class="form-group">
                      <label for="spots_availible">Spots Availible</label>
                      <input type="text" class="form-control{{ $errors->first('spots_availible') ? ' is-invalid' : '' }}" id="spots_availible" name="spots_availible" value="{{ old('spots_availible') ?? $event->spots_availible }}" />
		      @if($errors->first('spots_availible'))
		      <small id="codeHelp" class="form-text invalid-feedback">{{ $errors->first('spots_availible') }}</small>
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