@extends('layouts.app')

@section('title', $skill->name)

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/game')) }}
{{ Breadcrumbs::push('Skills', url('/game/skills') ) }}
{{ Breadcrumbs::push($skill->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $skill->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $skill->description }}</p>
		</div>
	      </div>

@endsection