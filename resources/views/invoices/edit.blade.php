@extends('layouts.admin')

@section('title', 'Create Server')

@section('meta', '')

{{ Breadcrumbs::push('Servers', url('/servers') ) }}
{{ Breadcrumbs::push('Edit') }}

@section('content')

                  <form method="POST" action="{{ url($server->path()) }}">
		    {{ csrf_field() }}
		    {{ method_field('PATCH') }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Edit Server</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') ?? $server->name}}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="name">Hostname</label>
                      <input type="text" class="form-control{{ $errors->first('hostname') ? ' is-invalid' : '' }}" id="hostname" name="hostname" value="{{ old('hostname') ?? $server->hostname}}" />
		      @if($errors->first('hostname'))
		      <small id="hostnameHelp" class="form-text invalid-feedback">{{ $errors->first('hostname') }}</small>
		      @endif
	            </div>
     	            <div class="form-group">
		      <label for="description">Description</label>
		      <textarea class="form-control{{ $errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="3">{{ old('description') ?? $server->description }}</textarea>
		      @if($errors->first('description'))
		      <small id="descriptionHelp" class="form-text invalid-feedback">{{ $errors->first('description') }}</small>
		      @endif
		    </div>
		    <div class="form-group">
                      <label for="name">IPv4</label>
                      <input type="text" class="form-control{{ $errors->first('ipv4') ? ' is-invalid' : '' }}" id="ipv4" name="ipv4" value="{{ old('ipv4') ?? $server->ipv4 }}" />
		      @if($errors->first('ipv4'))
		      <small id="ipv4Help" class="form-text invalid-feedback">{{ $errors->first('ipv4') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="name">IPv6</label>
                      <input type="text" class="form-control{{ $errors->first('ipv6') ? ' is-invalid' : '' }}" id="ipv6" name="ipv6" value="{{ old('ipv6') ?? $server->ipv6}}" />
		      @if($errors->first('ipv6'))
		      <small id="ipv6Help" class="form-text invalid-feedback">{{ $errors->first('ipv6') }}</small>
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