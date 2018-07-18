@extends('layouts.admin')

@section('title', 'Create Zone')

@section('meta', '')

{{ Breadcrumbs::push('Zones', url('/zones') ) }}
{{ Breadcrumbs::push('Create') }}

@section('content')

                  <form method="POST" action="{{ url('/zones') }}">
		    {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Zone</h5>
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
                      <label for="serial">Serial</label>
                      <input type="text" class="form-control{{ $errors->first('serial') ? ' is-invalid' : '' }}" id="serial" name="serial" value="{{ old('serial') ?? '1' }}" />
		      @if($errors->first('serial'))
		      <small id="serialHelp" class="form-text invalid-feedback">{{ $errors->first('serial') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="refreshAt">Refresh</label>
                      <input type="text" class="form-control{{ $errors->first('refresh') ? ' is-invalid' : '' }}" id="refresh" name="refresh" value="{{ old('refresh') ?? '172800' }}" />
		      @if($errors->first('refresh'))
		      <small id="refreshHelp" class="form-text invalid-feedback">{{ $errors->first('refresh') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="retry">Retry</label>
                      <input type="text" class="form-control{{ $errors->first('retry') ? ' is-invalid' : '' }}" id="retry" name="retry" value="{{ old('retry') ?? '900' }}" />
		      @if($errors->first('retry'))
		      <small id="retryHelp" class="form-text invalid-feedback">{{ $errors->first('retry') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="expire">Expire</label>
                      <input type="text" class="form-control{{ $errors->first('expire') ? ' is-invalid' : '' }}" id="expire" name="expire" value="{{ old('expire') ?? '1209600' }}" />
		      @if($errors->first('expire'))
		      <small id="expireHelp" class="form-text invalid-feedback">{{ $errors->first('expire') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="ttl">TTL</label>
                      <input type="text" class="form-control{{ $errors->first('ttl') ? ' is-invalid' : '' }}" id="ttl" name="ttl" value="{{ old('ttl') ?? '3600' }}" />
		      @if($errors->first('ttl'))
		      <small id="ttlHelp" class="form-text invalid-feedback">{{ $errors->first('ttl') }}</small>
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