@extends('layouts.app')

@section('title', 'Create Stat')

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/game') ) }}
{{ Breadcrumbs::push('Stats', url('/game/stats') ) }}
{{ Breadcrumbs::push('Create') }}

@section('content')

            <form method="POST" action="{{ url('/game/stats') }}">
	      {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Stat</h5>
		</div>
		<div class="card-body">
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
                    <div class="form-group">
                      <label for="min">Min</label>
                      <input type="text" class="form-control{{ $errors->first('min') ? ' is-invalid' : '' }}" id="min" name="min" value="{{ old('min') }}" />
		      @if($errors->first('min'))
		      <small id="minHelp" class="form-text invalid-feedback">{{ $errors->first('min') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="max">Max</label>
                      <input type="text" class="form-control{{ $errors->first('max') ? ' is-invalid' : '' }}" id="max" name="max" value="{{ old('max') }}" />
		      @if($errors->first('max'))
		      <small id="maxHelp" class="form-text invalid-feedback">{{ $errors->first('max') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="refresh">Refresh</label>
                      <input type="text" class="form-control{{ $errors->first('refresh') ? ' is-invalid' : '' }}" id="refresh" name="refresh" value="{{ old('refresh') }}" />
		      @if($errors->first('refresh'))
		      <small id="refreshHelp" class="form-text invalid-feedback">{{ $errors->first('refresh') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="refresh_rate">Refresh Rate</label>
                      <input type="text" class="form-control{{ $errors->first('refresh_rate') ? ' is-invalid' : '' }}" id="refresh_rate" name="refresh_rate" value="{{ old('refresh_rate') }}" />
		      @if($errors->first('refresh_rate'))
		      <small id="refreshRateHelp" class="form-text invalid-feedback">{{ $errors->first('refresh_rate') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="refresh_rate_unit">Refresh Rate Unit</label>
       		      <select class="form-control{{ $errors->first('refresh_rate_unit') ? ' is-invalid' : '' }}" id="refresh_rate_unit" name="refresh_rate_unit">
		        <option></option>
		        <option value="seconds"{{ (old('refresh_rate_unit') == 'seconds') ? ' selected' : '' }}>seconds</option>
			<option value="minutes"{{ (old('refresh_rate_unit') == 'minutes') ? ' selected' : '' }}>minutes</option>
			<option value="hours"{{ (old('refresh_rate_unit') == 'hours') ? ' selected' : '' }}>hours</option>
			<option value="days"{{ (old('refresh_rate_unit') == 'days') ? ' selected' : '' }}>days</option>
		      </select>
		      @if($errors->first('refresh_rate_unit'))
		      <small id="refreshRateUnitHelp" class="form-text invalid-feedback">{{ $errors->first('refresh_rate_unit') }}</small>
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