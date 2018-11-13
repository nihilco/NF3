@extends('layouts.app')

@section('title', 'Create Activity')

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/game')) }}
{{ Breadcrumbs::push('Activities', url('/game/activities')) }}
{{ Breadcrumbs::push('Create') }}

@section('content')

            <form method="POST" action="{{ url('/game/activities') }}">
	      {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Activity</h5>
		</div>
		<div class="card-body">
		    <div class="form-group">
                      <label for="skill">Skill</label>
       		      <select class="form-control{{ $errors->first('skill') ? ' is-invalid' : '' }}" id="skill" name="skill">
		        <option></option>
			@foreach($skills as $skill)
		        <option value="{{ $skill->id }}"{{ (old('skill') == $skill->id) ? ' selected' : '' }}>{{ $skill->name }}</option>
			@endforeach
		      </select>
		      @if($errors->first('skill'))
		      <small id="skillHelp" class="form-text invalid-feedback">{{ $errors->first('skill') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="skill Rank">Skill Rank</label>
                      <input type="text" class="form-control{{ $errors->first('skill_rank') ? ' is-invalid' : '' }}" id="skill_rank" name="skill_rank" value="{{ old('skill_rank') }}" />
		      @if($errors->first('skill_rank'))
		      <small id="skillRankHelp" class="form-text invalid-feedback">{{ $errors->first('skill_rank') }}</small>
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