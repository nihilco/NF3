@extends('layouts.admin')

@section('title', 'Edit Domain')

@section('meta', '')

{{ Breadcrumbs::push('Domains', url('/domains') ) }}
{{ Breadcrumbs::push('Edit') }}

@section('content')

                  <form method="POST" action="{{ url($domain->path()) }}">
		    {{ csrf_field() }}
		    {{ method_field('PATCH') }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Edit Domain</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="tld">TLD</label>
       		      <select class="form-control{{ $errors->first('tld') ? ' is-invalid' : '' }}" id="tld" name="tld">
		        @php
			  $v = old('tld') ?? $domain->tld_id;
			@endphp
		        <option></option>
			@foreach($tlds as $tld)
		        <option value="{{ $tld->id }}"{{ ($v == $tld->id) ? ' selected' : '' }}>{{ $tld->domain }}</option>
			@endforeach
		      </select>
		      @if($errors->first('tld'))
		      <small id="tldHelp" class="form-text invalid-feedback">{{ $errors->first('tld') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="account">Account</label>
       		      <select class="form-control{{ $errors->first('account') ? ' is-invalid' : '' }}" id="account" name="account">
		        @php
			    $v = old('account') ?? $domain->account_id;
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
                      <label for="domain">Domain</label>
                      <input type="text" class="form-control{{ $errors->first('domain') ? ' is-invalid' : '' }}" id="domain" name="domain" value="{{ old('domain') ?? $domain->domain }}" />
		      @if($errors->first('domain'))
		      <small id="domainHelp" class="form-text invalid-feedback">{{ $errors->first('domain') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="registeredAt">Registered On</label>
                      <input type="text" class="form-control{{ $errors->first('registeredAt') ? ' is-invalid' : '' }}" id="registeredAt" name="registeredAt" value="{{ old('registeredAt') ?? $domain->registered_at }}" />
		      @if($errors->first('registeredAt'))
		      <small id="registeredAtHelp" class="form-text invalid-feedback">{{ $errors->first('registeredAt') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="lastRenewedAt">Last Renewed On</label>
                      <input type="text" class="form-control{{ $errors->first('lastRenewedAt') ? ' is-invalid' : '' }}" id="lastRenewedAt" name="lastRenewedAt" value="{{ old('lastRenewedAt') ?? $domain->last_renewed_at }}" />
		      @if($errors->first('lastRenewedAt'))
		      <small id="lastRenewedAtHelp" class="form-text invalid-feedback">{{ $errors->first('lastRenewedAt') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="renewsAt">Next Renewal On</label>
                      <input type="text" class="form-control{{ $errors->first('renewsAt') ? ' is-invalid' : '' }}" id="renewsAt" name="renewsAt" value="{{ old('renewsAt') ?? $domain->renews_at }}" />
		      @if($errors->first('renewsAt'))
		      <small id="renewsAtHelp" class="form-text invalid-feedback">{{ $errors->first('renewsAt') }}</small>
		      @endif
	            </div>
	            <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input{{ $errors->first('active') ? ' is-invalid' : '' }}" id="active" name="active"{{ (old('active') == 'on' || $domain->active) ? ' checked' : '' }} />
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