@extends('layouts.app')

@section('title', 'Create Customer')

@section('meta', '')

{{ Breadcrumbs::push('Customers', url('/customers') ) }}
{{ Breadcrumbs::push('Create' ) }}

@section('content')

                  <form method="POST" action="{{ url('/customers') }}">
		    {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Customer</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="account">Account</label>
       		      <select class="form-control{{ $errors->first('account') ? ' is-invalid' : '' }}" id="account" name="account">
		        <option></option>
			@foreach($accounts as $account)
		        <option value="{{ $account->id }}"{{ (old('account') == $account->id) ? ' selected' : '' }}>{{ $account->name }}</option>
			@endforeach
		      </select>
		      @if($errors->first('account'))
		      <small id="accountHelp" class="form-text invalid-feedback">{{ $errors->first('account') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="domain">Owner</label>
       		      <select class="form-control{{ $errors->first('owner') ? ' is-invalid' : '' }}" id="owner" name="owner">
		        <option></option>
			@foreach($users as $user)
		        <option value="{{ $user->id }}"{{ (old('owner') == $user->id) ? ' selected' : '' }}>{{ $user->email }}</option>
			@endforeach
		      </select>
		      @if($errors->first('owner'))
		      <small id="ownerHelp" class="form-text invalid-feedback">{{ $errors->first('owner') }}</small>
		      @endif
	            </div>		    
		    <div class="form-group">
                      <label for="stripeID">Stripe ID</label>
                      <input type="text" class="form-control{{ $errors->first('stripeId') ? ' is-invalid' : '' }}" id="stripeId" name="stripeId" value="{{ old('stripeId') }}" />
		      @if($errors->first('stripeId'))
		      <small id="stripeIdHelp" class="form-text invalid-feedback">{{ $errors->first('stripeId') }}</small>
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