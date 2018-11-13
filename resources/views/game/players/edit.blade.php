@extends('layouts.app')

@section('title', 'Edit Player')

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/game') ) }}
{{ Breadcrumbs::push('Players', url('/game/players') ) }}
{{ Breadcrumbs::push('Edit') }}

@section('content')

            <form method="POST" action="{{ url($player->path()) }}">
	      {{ csrf_field() }}
	      {{ method_field('PATCH') }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Edit Player</h5>
		</div>
		<div class="card-body">

		    <div class="form-group">
                      <label for="user">User</label>
       		      <select class="form-control{{ $errors->first('user') ? ' is-invalid' : '' }}" id="user" name="user">
		        @php
			  $v = old('user') ?? $player->user_id;
			@endphp
		        <option></option>
			@foreach($users as $user)
		        <option value="{{ $user->id }}"{{ ($v == $user->id) ? ' selected' : '' }}>{{ $user->email }}</option>
			@endforeach
		      </select>
		      @if($errors->first('user'))
		      <small id="userHelp" class="form-text invalid-feedback">{{ $errors->first('user') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') ?? $player->name }}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="level">Level</label>
                      <input type="text" class="form-control{{ $errors->first('level') ? ' is-invalid' : '' }}" id="level" name="level" value="{{ old('level') ?? $player->level }}" />
		      @if($errors->first('level'))
		      <small id="levelHelp" class="form-text invalid-feedback">{{ $errors->first('level') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="age">Age</label>
                      <input type="text" class="form-control{{ $errors->first('age') ? ' is-invalid' : '' }}" id="age" name="age" value="{{ old('age') ?? $player->age }}" />
		      @if($errors->first('age'))
		      <small id="ageHelp" class="form-text invalid-feedback">{{ $errors->first('age') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="experience">Experience</label>
                      <input type="text" class="form-control{{ $errors->first('experience') ? ' is-invalid' : '' }}" id="experience" name="experience" value="{{ old('experience') ?? $player->experience }}" />
		      @if($errors->first('experience'))
		      <small id="experienceHelp" class="form-text invalid-feedback">{{ $errors->first('experience') }}</small>
		      @endif
	            </div>		    
		</div>
		<div class="card-footer text-muted">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-link">Reset</button>
		</div>

	      </div>
	    </form>

@endsection