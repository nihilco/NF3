@extends('layouts.admin')

@section('title', 'Create Domain')

@section('meta', '')

{{ Breadcrumbs::push('Domains', url('/domains') ) }}
{{ Breadcrumbs::push('Create') }}

@section('content')

                  <form method="POST" action="{{ url('/domains') }}">
		    {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Domain</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="tld">TLD</label>
       		      <select class="form-control{{ $errors->first('tld') ? ' is-invalid' : '' }}" id="tld" name="tld">
		        <option></option>
			@foreach($tlds as $tld)
		        <option value="{{ $tld->id }}"{{ (old('tld') == $tld->id) ? ' selected' : '' }}>{{ $tld->domain }}</option>
			@endforeach
		      </select>
		      @if($errors->first('tld'))
		      <small id="tldHelp" class="form-text invalid-feedback">{{ $errors->first('tld') }}</small>
		      @endif
	            </div>
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
                      <label for="domain">Domain</label>
                      <input type="text" class="form-control{{ $errors->first('domain') ? ' is-invalid' : '' }}" id="domain" name="domain" value="{{ old('domain') }}" />
		      @if($errors->first('domain'))
		      <small id="domainHelp" class="form-text invalid-feedback">{{ $errors->first('domain') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="registeredAt">Registered On</label>
                      <input type="text" class="form-control{{ $errors->first('registeredAt') ? ' is-invalid' : '' }}" id="registeredAt" name="registeredAt" value="{{ old('registeredAt') }}" />
		      @if($errors->first('registeredAt'))
		      <small id="registeredAtHelp" class="form-text invalid-feedback">{{ $errors->first('registeredAt') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="lastRenewedAt">Last Renewed On</label>
                      <input type="text" class="form-control{{ $errors->first('lastRenewedAt') ? ' is-invalid' : '' }}" id="lastRenewedAt" name="lastRenewedAt" value="{{ old('lastRenewedAt') }}" />
		      @if($errors->first('lastRenewedAt'))
		      <small id="lastRenewedAtHelp" class="form-text invalid-feedback">{{ $errors->first('lastRenewedAt') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="renewsAt">Next Renewal On</label>
                      <input type="text" class="form-control{{ $errors->first('renewsAt') ? ' is-invalid' : '' }}" id="renewsAt" name="renewsAt" value="{{ old('renewsAt') }}" />
		      @if($errors->first('renewsAt'))
		      <small id="renewsAtHelp" class="form-text invalid-feedback">{{ $errors->first('renewsAt') }}</small>
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