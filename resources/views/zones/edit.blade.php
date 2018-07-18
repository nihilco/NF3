@extends('layouts.admin')

@section('title', 'Edit Zone')

@section('meta', '')

{{ Breadcrumbs::push('Zones', url('/zones') ) }}
{{ Breadcrumbs::push('Edit') }}

@section('content')

                  <form method="POST" action="{{ url($zone->path()) }}">
		    {{ csrf_field() }}
		    {{ method_field('PATCH') }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Edit Zone</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="domain">Domain</label>
       		      <select class="form-control{{ $errors->first('domain') ? ' is-invalid' : '' }}" id="domain" name="domain">
		        @php
			  $v = old('domain') ?? $zone->domain_id;
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
                      <label for="serial">Serial</label>
                      <input type="text" class="form-control{{ $errors->first('serial') ? ' is-invalid' : '' }}" id="serial" name="serial" value="{{ old('serial') ?? $zone->serial }}" />
		      @if($errors->first('serial'))
		      <small id="serialHelp" class="form-text invalid-feedback">{{ $errors->first('serial') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="refreshAt">Refresh</label>
                      <input type="text" class="form-control{{ $errors->first('refresh') ? ' is-invalid' : '' }}" id="refresh" name="refresh" value="{{ old('refresh') ?? $zone->refresh }}" />
		      @if($errors->first('refresh'))
		      <small id="refreshHelp" class="form-text invalid-feedback">{{ $errors->first('refresh') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="retry">Retry</label>
                      <input type="text" class="form-control{{ $errors->first('retry') ? ' is-invalid' : '' }}" id="retry" name="retry" value="{{ old('retry') ?? $zone->retry }}" />
		      @if($errors->first('retry'))
		      <small id="retryHelp" class="form-text invalid-feedback">{{ $errors->first('retry') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="expire">Expire</label>
                      <input type="text" class="form-control{{ $errors->first('expire') ? ' is-invalid' : '' }}" id="expire" name="expire" value="{{ old('expire') ?? $zone->expire }}" />
		      @if($errors->first('expire'))
		      <small id="expireHelp" class="form-text invalid-feedback">{{ $errors->first('expire') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="ttl">TTL</label>
                      <input type="text" class="form-control{{ $errors->first('ttl') ? ' is-invalid' : '' }}" id="ttl" name="ttl" value="{{ old('ttl') ?? $zone->ttl }}" />
		      @if($errors->first('ttl'))
		      <small id="ttlHelp" class="form-text invalid-feedback">{{ $errors->first('ttl') }}</small>
		      @endif
	            </div>		    
	            <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input{{ $errors->first('active') ? ' is-invalid' : '' }}" id="active" name="active"{{ (old('active') == 'on' || $zone->active) ? ' checked' : '' }} />
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