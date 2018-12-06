@extends('layouts.app')

@section('title', 'Create Link')

@section('meta', '')

{{ Breadcrumbs::push('Links', url('/links') ) }}
{{ Breadcrumbs::push('Create') }}

@section('content')

                  <form method="POST" action="{{ url('/links') }}">
		    {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Link</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="slug">Slug</label>
                      <input type="text" class="form-control{{ $errors->first('slug') ? ' is-invalid' : '' }}" id="slug" name="slug" value="{{ old('slug') }}" />
		      @if($errors->first('slug'))
		      <small id="slugHelp" class="form-text invalid-feedback">{{ $errors->first('slug') }}</small>
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
                      <label for="url">URL</label>
                      <input type="text" class="form-control{{ $errors->first('url') ? ' is-invalid' : '' }}" id="url" name="url" value="{{ old('url') }}" />
		      @if($errors->first('url'))
		      <small id="urlHelp" class="form-text invalid-feedback">{{ $errors->first('url') }}</small>
		      @endif
	            </div>
     	            <div class="form-group">
		      <label for="description">Description</label>
		      <textarea class="form-control{{ $errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="3">{{ old('description') }}</textarea>
		      @if($errors->first('description'))
		      <small id="descriptionHelp" class="form-text invalid-feedback">{{ $errors->first('description') }}</small>
		      @endif
		    </div>
		    <div class="form-group">
                      <label for="expiresClicks">Expires Clicks</label>
                      <input type="text" class="form-control{{ $errors->first('expires_clicks') ? ' is-invalid' : '' }}" id="expires_clicks" name="expires_clicks" value="{{ old('expires_clicks') }}" />
		      @if($errors->first('expires_clicks'))
		      <small id="expiresClicksHelp" class="form-text invalid-feedback">{{ $errors->first('expires_clicks') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="expiresAt">Expires At</label>
                      <input type="text" class="form-control{{ $errors->first('expires_at') ? ' is-invalid' : '' }}" id="expires_at" name="expires_at" value="{{ old('expires_at') }}" />
		      @if($errors->first('expires_at'))
		      <small id="expiresAtHelp" class="form-text invalid-feedback">{{ $errors->first('expires_at') }}</small>
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