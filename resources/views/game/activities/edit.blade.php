@extends('layouts.app')

@section('title', 'Edit Activity')

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/game') ) }}
{{ Breadcrumbs::push('Players', url('/game/activities') ) }}
{{ Breadcrumbs::push('Edit') }}

@section('content')

            <form method="POST" action="{{ $activity->path() }}">
	      {{ csrf_field() }}
	      {{ method_field('PATCH') }}	      
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Edit Activity</h5>
		</div>
		<div class="card-body">
		    <div class="form-group">
                      <label for="skill">Skill</label>
       		      <select class="form-control{{ $errors->first('skill') ? ' is-invalid' : '' }}" id="skill" name="skill">
		        @php
			    $v = old('skill') ?? $activity->skill_id;
			@endphp
		        <option></option>
			@foreach($skills as $skill)
		        <option value="{{ $skill->id }}"{{ ($v == $skill->id) ? ' selected' : '' }}>{{ $skill->name }}</option>
			@endforeach
		      </select>
		      @if($errors->first('skill'))
		      <small id="skillHelp" class="form-text invalid-feedback">{{ $errors->first('skill') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="skill Rank">Skill Rank</label>
                      <input type="text" class="form-control{{ $errors->first('skill_rank') ? ' is-invalid' : '' }}" id="skill_rank" name="skill_rank" value="{{ old('skill_rank') ?? $activity->skill_rank }}" />
		      @if($errors->first('skill_rank'))
		      <small id="skillRankHelp" class="form-text invalid-feedback">{{ $errors->first('skill_rank') }}</small>
		      @endif
	            </div>		    
		    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') ?? $activity->name }}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>
     	            <div class="form-group">
		      <label for="description">Description</label>
		      <textarea class="form-control{{ $errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="3">{{ old('description') ?? $activity->description }}</textarea>
		      @if($errors->first('description'))
		      <small id="descriptionHelp" class="form-text invalid-feedback">{{ $errors->first('description') }}</small>
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