@extends('layouts.admin')

@section('title', 'Edit Website')

@section('meta', '')

{{ Breadcrumbs::push('Websites', url('/websites') ) }}
{{ Breadcrumbs::push('Edit' ) }}

@section('content')

                  <form method="POST" action="{{ url($website->path()) }}">
		    {{ csrf_field() }}
		    {{ method_field('PATCH') }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Edit Website</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="domain">Domain</label>
       		      <select class="form-control{{ $errors->first('domain') ? ' is-invalid' : '' }}" id="domain" name="domain">
		        @php
			  $v = old('website') ?? $website->domain_id;
			@endphp
		        <option></option>
			@foreach($domains as $domain)
		        <option value="{{ $domain->id }}"{{ ($v == $domain->id) ? ' selected' : '' }}>{{ $domain->domain }}</option>
			@endforeach
		      </select>
		      @if($errors->first('domain'))
		      <small id="domainHelp" class="form-text invalid-feedback">{{ $errors->first('domain') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="account">Account</label>
       		      <select class="form-control{{ $errors->first('account') ? ' is-invalid' : '' }}" id="account" name="account">
		        @php
			  $v = old('account') ?? $website->account_id;
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
                      <label for="hostname">Hostname</label>
                      <input type="text" class="form-control{{ $errors->first('hostname') ? ' is-invalid' : '' }}" id="hostname" name="hostname" value="{{ old('hostname') ?? $website->hostname }}" />
		      @if($errors->first('hostname'))
		      <small id="hostnameHelp" class="form-text invalid-feedback">{{ $errors->first('hostname') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="analyticsCode">Analytics Code</label>
                      <input type="text" class="form-control{{ $errors->first('analyticsCode') ? ' is-invalid' : '' }}" id="analyticsCode" name="analyticsCode" value="{{ old('analyticsCode') ?? $website->analytics_code }}" />
		      @if($errors->first('analyticsCode'))
		      <small id="analyticsCodeHelp" class="form-text invalid-feedback">{{ $errors->first('analyticsCode') }}</small>
		      @endif
	            </div>
	            <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input{{ $errors->first('underConstruction') ? ' is-invalid' : '' }}" id="underConstruction" name="underConstruction"{{ (old('underConstruction') == 'on' || $website->under_conscruction) ? ' checked' : '' }} />
    	              <label class="form-check-label" for="underConstruction">Under Construction</label>
	              @if($errors->first('underConstruction'))
	                <small id="underConstructionHelp" class="form-text invalid-feedback">{{ $errors->first('underConstruction') }}</small>
	              @endif
	          </div>
	            <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input{{ $errors->first('active') ? ' is-invalid' : '' }}" id="active" name="active"{{ (old('active') == 'on' || $website->active) ? ' checked' : '' }} />
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