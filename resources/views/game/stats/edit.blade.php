@extends('layouts.app')

@section('title', 'Edit Stat')

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/game') ) }}
{{ Breadcrumbs::push('Stats', url('/game/stats') ) }}
{{ Breadcrumbs::push('Edit') }}

@section('content')

            <form method="POST" action="{{ $stat->path() }}">
	      {{ csrf_field() }}
	      {{ method_field('PATCH') }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Edit Stat</h5>
		</div>
		<div class="card-body">
		    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') ?? $stat->name }}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>
     	            <div class="form-group">
		      <label for="description">Description</label>
		      <textarea class="form-control{{ $errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="3">{{ old('description') ?? $stat->description }}</textarea>
		      @if($errors->first('description'))
		      <small id="descriptionHelp" class="form-text invalid-feedback">{{ $errors->first('description') }}</small>
		      @endif
		    </div>
                    <div class="form-group">
                      <label for="min">Min</label>
                      <input type="text" class="form-control{{ $errors->first('min') ? ' is-invalid' : '' }}" id="min" name="min" value="{{ old('min') ?? $stat->min}}" />
		      @if($errors->first('min'))
		      <small id="minHelp" class="form-text invalid-feedback">{{ $errors->first('min') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="max">Max</label>
                      <input type="text" class="form-control{{ $errors->first('max') ? ' is-invalid' : '' }}" id="max" name="max" value="{{ old('max') ?? $stat->max }}" />
		      @if($errors->first('max'))
		      <small id="maxHelp" class="form-text invalid-feedback">{{ $errors->first('max') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="refresh">Refresh</label>
                      <input type="text" class="form-control{{ $errors->first('refresh') ? ' is-invalid' : '' }}" id="refresh" name="refresh" value="{{ old('refresh') ?? $stat->refresh }}" />
		      @if($errors->first('refresh'))
		      <small id="refreshHelp" class="form-text invalid-feedback">{{ $errors->first('refresh') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="refresh_rate">Refresh Rate</label>
                      <input type="text" class="form-control{{ $errors->first('refresh_rate') ? ' is-invalid' : '' }}" id="refresh_rate" name="refresh_rate" value="{{ old('refresh_rate') ?? $stat->refresh_rate }}" />
		      @if($errors->first('refresh_rate'))
		      <small id="refreshRateHelp" class="form-text invalid-feedback">{{ $errors->first('refresh_rate') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="refresh_rate_unit">Refresh Rate Unit</label>
       		      <select class="form-control{{ $errors->first('refresh_rate_unit') ? ' is-invalid' : '' }}" id="refresh_rate_unit" name="refresh_rate_unit">
		        @php
			    $v = old('refresh_rate_unit') ?? $stat->refresh_rate_unit;
			@endphp
		        <option></option>
		        <option value="seconds"{{ ($v == 'seconds') ? ' selected' : '' }}>seconds</option>
			<option value="minutes"{{ ($v == 'minutes') ? ' selected' : '' }}>minutes</option>
			<option value="hours"{{ ($v == 'hours') ? ' selected' : '' }}>hours</option>
			<option value="days"{{ ($v == 'days') ? ' selected' : '' }}>days</option>
		      </select>
		      @if($errors->first('refresh_rate_unit'))
		      <small id="refreshRateUnitHelp" class="form-text invalid-feedback">{{ $errors->first('refresh_rate_unit') }}</small>
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