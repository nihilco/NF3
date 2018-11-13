@extends('layouts.app')

@section('title', 'Create Account')

@section('meta', '')

{{ Breadcrumbs::push('Accounts', url('/accounts') ) }}
{{ Breadcrumbs::push('Create') }}

@section('content')

            <form method="POST" action="{{ url('/accounts') }}">
              {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Account</h5>
		</div>
		<div class="card-body">
                  <div class="form-group">
                    <label for="name">Type</label>
		    <select class="form-control{{ $errors->first('type') ? ' is-invalid' : '' }}" id="type" name="type">
		      <option></option>
		      <option value="test"{{ (old('type') == 'test') ? ' selected' : '' }}>Test</option>
		      <option value="live"{{ (old('type') == 'live') ? ' selected' : '' }}>Live</option>
		    </select>
		    @if($errors->first('type'))
		    <small id="typeHelp" class="form-text invalid-feedback">{{ $errors->first('type') }}</small>
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
                    <label for="name">Stripe ID</label>
                    <input type="text" class="form-control{{ $errors->first('stripeId') ? ' is-invalid' : '' }}" id="stripeId" name="stripeId" value="{{ old('stripeId') }}" />
		    @if($errors->first('stripeId'))
		    <small id="stripeIdHelp" class="form-text invalid-feedback">{{ $errors->first('stripeId') }}</small>
		    @endif
	          </div>
		  <div class="form-group">
                    <label for="name">Publishable Key</label>
                    <input type="text" class="form-control{{ $errors->first('publishableKey') ? ' is-invalid' : '' }}" id="publishableKey" name="publishableKey" value="{{ old('publishableKey') }}" />
		    @if($errors->first('publishableKey'))
		    <small id="publishableKeyHelp" class="form-text invalid-feedback">{{ $errors->first('publishableKey') }}</small>
		    @endif
	          </div>
		  <div class="form-group">
                    <label for="name">Secret Key</label>
		    <div class="input-group{{ $errors->first('secretKey') ? ' is-invalid' : '' }}">
		      <input type="password" class="form-control" id="secretKey" name="secretKey" aria-label="Secret Key" aria-describedby="button-show-addon" value="{{ old('secretKey') }}" />
		      <div class="input-group-append">
		        <button class="btn btn-outline-secondary" type="button" id="button-showhide-addon" onclick="togglePasswordField()">Show</button>
		      </div>
		    </div>
		    @if($errors->first('secretKey'))
		    <small id="secretKeyHelp" class="form-text invalid-feedback">{{ $errors->first('secretKey') }}</small>
		    @endif
	          </div>
     	          <div class="form-group">
		    <label for="description">Description</label>
		    <textarea class="form-control{{ $errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="3">{{ old('description') }}</textarea>
		    @if($errors->first('description'))
		    <small id="descriptionHelp" class="form-text invalid-feedback">{{ $errors->first('description') }}</small>
		    @endif
		  </div>		    
	          <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input{{ $errors->first('active') ? ' is-invalid' : '' }}" id="active" name="active"{{ (old('active') == 'on') ? ' checked' : '' }} />
    	            <label class="form-check-label" for="active">Active</label>
	            @if($errors->first('active'))
	              <small id="activeHelp" class="form-text invalid-feedback">{{ $errors->first('active') }}</small>
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