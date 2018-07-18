@extends('layouts.admin')

@section('title', 'Edit Record')

@section('meta', '')

{{ Breadcrumbs::push('Records', url('/records')) }}
{{ Breadcrumbs::push('Edit') }}

@section('content')

                  <form method="POST" action="{{ url($record->path()) }}">
		    {{ csrf_field() }}
		    {{ method_field('PATCH') }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Edit Record</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="zone">Zone</label>
       		      <select class="form-control{{ $errors->first('zone') ? ' is-invalid' : '' }}" id="zone" name="zone">
		        @php
			  $v = old('zone') ?? $record->zone_id;
			@endphp
		        <option></option>
			@foreach($zones as $zone)
		        <option value="{{ $zone->id }}"{{ ($v == $zone->id) ? ' selected' : '' }}>{{ $zone->domain->domain }}</option>
			@endforeach
		      </select>
		      @if($errors->first('zone'))
		      <small id="zoneHelp" class="form-text invalid-feedback">{{ $errors->first('zone') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') ?? $record->name }}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="ttl">TTL</label>
                      <input type="text" class="form-control{{ $errors->first('ttl') ? ' is-invalid' : '' }}" id="ttl" name="ttl" value="{{ old('ttl') ?? $record->ttl }}" />
		      @if($errors->first('ttl'))
		      <small id="ttlHelp" class="form-text invalid-feedback">{{ $errors->first('ttl') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="type">Type</label>
       		      <select class="form-control{{ $errors->first('type') ? ' is-invalid' : '' }}" id="type" name="type">
		        @php
			  $v = old('type') ?? strtolower($record->type);
			@endphp
		        <option></option>        
		        <option value="ns"{{ ($v == 'ns') ? ' selected' : '' }}>NS</option>
		        <option value="mx"{{ ($v == 'mx') ? ' selected' : '' }}>MX</option>
			<option value="a"{{ ($v  == 'a') ? ' selected' : '' }}>A</option>
			<option value="aaaa"{{ ($v == 'aaaa') ? ' selected' : '' }}>AAAA</option>
			<option value="txt"{{ ($v == 'txt') ? ' selected' : '' }}>TXT</option>
		      </select>
		      @if($errors->first('type'))
		      <small id="typeHelp" class="form-text invalid-feedback">{{ $errors->first('type') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="priority">Priority</label>
                      <input type="text" class="form-control{{ $errors->first('priority') ? ' is-invalid' : '' }}" id="priority" name="priority" value="{{ old('priority') ?? $record->priority }}" />
		      @if($errors->first('priority'))
		      <small id="priorityHelp" class="form-text invalid-feedback">{{ $errors->first('priority') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="data">Data</label>
                      <input type="text" class="form-control{{ $errors->first('data') ? ' is-invalid' : '' }}" id="data" name="data" value="{{ old('data') ?? $record->data }}" />
		      @if($errors->first('data'))
		      <small id="dataHelp" class="form-text invalid-feedback">{{ $errors->first('data') }}</small>
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