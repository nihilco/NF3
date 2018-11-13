@extends('layouts.app')

@section('title', 'Create Item')

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/game')) }}
{{ Breadcrumbs::push('Items', url('/game/items')) }}
{{ Breadcrumbs::push('Create') }}

@section('content')

            <form method="POST" action="{{ url('/game/items') }}">
	      {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Item</h5>
		</div>
		<div class="card-body">
		    <div class="form-group">
                      <label for="user">Type</label>
       		      <select class="form-control{{ $errors->first('type') ? ' is-invalid' : '' }}" id="type" name="type">
		        <option></option>
			@foreach($types as $type)
		        <option value="{{ $type->id }}"{{ (old('type') == $type->id) ? ' selected' : '' }}>{{ $type->name }}</option>
			@endforeach
		      </select>
		      @if($errors->first('type'))
		      <small id="typeHelp" class="form-text invalid-feedback">{{ $errors->first('type') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="type_rank">Type Rank</label>
                      <input type="text" class="form-control{{ $errors->first('type_rank') ? ' is-invalid' : '' }}" id="type_rank" name="type_rank" value="{{ old('type_rank') }}" />
		      @if($errors->first('type_rank'))
		      <small id="typeRankHelp" class="form-text invalid-feedback">{{ $errors->first('type_rank') }}</small>
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
		      <label for="description">Description</label>
		      <textarea class="form-control{{ $errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="3">{{ old('description') }}</textarea>
		      @if($errors->first('description'))
		      <small id="descriptionHelp" class="form-text invalid-feedback">{{ $errors->first('description') }}</small>
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