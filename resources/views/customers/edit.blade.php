@extends('layouts.app')

@section('title', 'Edit Customer')

@section('meta', '')

{{ Breadcrumbs::push('Customers', url('/customers') ) }}
{{ Breadcrumbs::push('Edit' ) }}

@section('content')

                  <form method="POST" action="{{ url($customer->path()) }}">
		    {{ csrf_field() }}
		    {{ method_field('PATCH') }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Edit Customer</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="account">Account</label>
       		      <select class="form-control{{ $errors->first('account') ? ' is-invalid' : '' }}" id="account" name="account">
		        @php
			  $v = old('account') ?? $customer->account_id;
			@endphp
		        <option></option>
			@foreach($accounts as $account)
		        <option value="{{ $account->id }}"{{ ($v == $account->id) ? ' selected' : '' }}>{{ $account->name }}</option>
			@endforeach
		      </select>
		      @if($errors->first('account'))
		      <small id="accountHelp" class="form-text invalid-feedback">{{ $errors->first('account') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="domain">Owner</label>
       		      <select class="form-control{{ $errors->first('owner') ? ' is-invalid' : '' }}" id="owner" name="owner">
		        @php
			  $v = old('owner') ?? $customer->owner_id;
			@endphp
		        <option></option>
			@foreach($users as $user)
		        <option value="{{ $user->id }}"{{ ($v == $user->id) ? ' selected' : '' }}>{{ $user->email }}</option>
			@endforeach
		      </select>
		      @if($errors->first('owner'))
		      <small id="ownerHelp" class="form-text invalid-feedback">{{ $errors->first('owner') }}</small>
		      @endif
	            </div>		    
		    <div class="form-group">
                      <label for="stripeID">Stripe ID</label>
                      <input type="text" class="form-control{{ $errors->first('stripeId') ? ' is-invalid' : '' }}" id="stripeId" name="stripeId" value="{{ old('stripeId') ?? $customer->stripe_id }}" />
		      @if($errors->first('stripeId'))
		      <small id="stripeIdHelp" class="form-text invalid-feedback">{{ $errors->first('stripeId') }}</small>
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