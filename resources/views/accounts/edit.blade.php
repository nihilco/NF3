@extends('layouts.app')

@section('title', 'Edit Account')

@section('meta', '')

{{ Breadcrumbs::push('Accounts', url('/accounts') ) }}
{{ Breadcrumbs::push('Edit') }}

@section('content')

            <form method="POST" action="{{ url($account->path()) }}">
              {{ csrf_field() }}
	      {{ method_field('PATCH') }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Edit Account</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="name">Type</label>
		      <select class="form-control{{ $errors->first('type') ? ' is-invalid' : '' }}" id="type" name="type">
		        @php
		          $v = old('type') ?? $account->type;
			@endphp
		        <option></option>
			<option value="test"{{ ($v == 'test') ? ' selected' : '' }}>Test</option>
			<option value="live"{{ ($v == 'live') ? ' selected' : '' }}>Live</option>
		      </select>
		      @if($errors->first('type'))
		      <small id="typeHelp" class="form-text invalid-feedback">{{ $errors->first('type') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') ?? $account->name }}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>		    
		    <div class="form-group">
                      <label for="name">Stripe ID</label>
                      <input type="text" class="form-control{{ $errors->first('stripeId') ? ' is-invalid' : '' }}" id="stripeId" name="stripeId" value="{{ old('stripeId') ?? $account->stripe_id}}" />
		      @if($errors->first('stripeId'))
		      <small id="stripeIdHelp" class="form-text invalid-feedback">{{ $errors->first('stripeId') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="name">Publishable Key</label>
                      <input type="text" class="form-control{{ $errors->first('publishableKey') ? ' is-invalid' : '' }}" id="publishableKey" name="publishableKey" value="{{ old('publishableKey') ?? $account->publishable_key }}" />
		      @if($errors->first('publishableKey'))
		      <small id="publishableKeyHelp" class="form-text invalid-feedback">{{ $errors->first('publishableKey') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="name">Secret Key</label>
		      <div class="input-group{{ $errors->first('secretKey') ? ' is-invalid' : '' }}">
		        <input type="password" class="form-control" id="secretKey" name="secretKey" aria-label="Secret Key" aria-describedby="button-show-addon" value="{{ old('secretKey') ?? decrypt($account->secret_key) }}" />
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
		      <textarea class="form-control{{ $errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="3">{{ old('description') ?? $account->description}}</textarea>
		      @if($errors->first('description'))
		      <small id="descriptionHelp" class="form-text invalid-feedback">{{ $errors->first('description') }}</small>
		      @endif
		    </div>		    
	            <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input{{ $errors->first('active') ? ' is-invalid' : '' }}" id="active" name="active"{{ (old('active') == 'on' || $account->active) ? ' checked' : '' }}/>
    	              <label class="form-check-label" for="active">Active</label>
	              @if($errors->first('active'))
	                <small id="activeHelp" class="form-text invalid-feedback">{{ $errors->first('active') }}</small>
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