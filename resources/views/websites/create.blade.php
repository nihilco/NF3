@extends('layouts.admin')

@section('title', 'Create Website')

@section('meta', '')

{{ Breadcrumbs::push('Websites', url('/websites') ) }}
{{ Breadcrumbs::push('Create' ) }}

@section('content')

                  <form method="POST" action="{{ url('/websites') }}">
		    {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Website</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="domain">Domain</label>
       		      <select class="form-control{{ $errors->first('domain') ? ' is-invalid' : '' }}" id="domain" name="domain">
		        <option></option>
			@foreach($domains as $domain)
		        <option value="{{ $domain->id }}"{{ (old('domain') == $domain->id) ? ' selected' : '' }}>{{ $domain->domain }}</option>
			@endforeach
		      </select>
		      @if($errors->first('domain'))
		      <small id="domainHelp" class="form-text invalid-feedback">{{ $errors->first('domain') }}</small>
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
                      <label for="hostname">Hostname</label>
                      <input type="text" class="form-control{{ $errors->first('hostname') ? ' is-invalid' : '' }}" id="hostname" name="hostname" value="{{ old('hostname') }}" />
		      @if($errors->first('hostname'))
		      <small id="hostnameHelp" class="form-text invalid-feedback">{{ $errors->first('hostname') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="analyticsCode">Analytics Code</label>
                      <input type="text" class="form-control{{ $errors->first('analyticsCode') ? ' is-invalid' : '' }}" id="analyticsCode" name="analyticsCode" value="{{ old('analyticsCode') }}" />
		      @if($errors->first('analyticsCode'))
		      <small id="analyticsCodeHelp" class="form-text invalid-feedback">{{ $errors->first('analyticsCode') }}</small>
		      @endif
	            </div>
	            <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input{{ $errors->first('underConstruction') ? ' is-invalid' : '' }}" id="underConstruction" name="underConstruction"{{ (old('underConstruction') == 'on') ? ' checked' : '' }} />
    	              <label class="form-check-label" for="underConstruction">Under Construction</label>
	              @if($errors->first('underConstruction'))
	                <small id="underConstructionHelp" class="form-text invalid-feedback">{{ $errors->first('underConstruction') }}</small>
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