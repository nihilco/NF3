@extends('layouts.admin')

@section('title', 'Create Record')

@section('meta', '')

{{ Breadcrumbs::push('Records', url('/records')) }}
{{ Breadcrumbs::push('Create') }}

@section('content')

                  <form method="POST" action="{{ url('/records') }}">
		    {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Record</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="zone">Zone</label>
       		      <select class="form-control{{ $errors->first('zone') ? ' is-invalid' : '' }}" id="zone" name="zone">
		        <option></option>
			@foreach($zones as $zone)
		        <option value="{{ $zone->id }}"{{ (old('zone') == $zone->id) ? ' selected' : '' }}>{{ $zone->domain->domain }}</option>
			@endforeach
		      </select>
		      @if($errors->first('zone'))
		      <small id="zoneHelp" class="form-text invalid-feedback">{{ $errors->first('zone') }}</small>
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
                      <label for="ttl">TTL</label>
                      <input type="text" class="form-control{{ $errors->first('ttl') ? ' is-invalid' : '' }}" id="ttl" name="ttl" value="{{ old('ttl') }}" />
		      @if($errors->first('ttl'))
		      <small id="ttlHelp" class="form-text invalid-feedback">{{ $errors->first('ttl') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="type">Type</label>
       		      <select class="form-control{{ $errors->first('type') ? ' is-invalid' : '' }}" id="type" name="type">
		        <option></option>        
		        <option value="ns"{{ (old('zone') == 'ns') ? ' selected' : '' }}>NS</option>
		        <option value="mx"{{ (old('zone') == 'mx') ? ' selected' : '' }}>MX</option>
			<option value="a"{{ (old('zone') == 'a') ? ' selected' : '' }}>A</option>
			<option value="aaaa"{{ (old('zone') == 'aaaa') ? ' selected' : '' }}>AAAA</option>
			<option value="txt"{{ (old('zone') == 'txt') ? ' selected' : '' }}>TXT</option>
		      </select>
		      @if($errors->first('type'))
		      <small id="typeHelp" class="form-text invalid-feedback">{{ $errors->first('type') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="priority">Priority</label>
                      <input type="text" class="form-control{{ $errors->first('priority') ? ' is-invalid' : '' }}" id="priority" name="priority" value="{{ old('priority') }}" />
		      @if($errors->first('priority'))
		      <small id="priorityHelp" class="form-text invalid-feedback">{{ $errors->first('priority') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="data">Data</label>
                      <input type="text" class="form-control{{ $errors->first('data') ? ' is-invalid' : '' }}" id="data" name="data" value="{{ old('data') }}" />
		      @if($errors->first('data'))
		      <small id="dataHelp" class="form-text invalid-feedback">{{ $errors->first('data') }}</small>
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