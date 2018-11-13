@extends('layouts.app')

@section('title', $activity->name)

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/game')) }}
{{ Breadcrumbs::push('Activities', url('/game/activities') ) }}
{{ Breadcrumbs::push($activity->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $activity->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $activity->description }}</p>
		</div>
	      </div>

@endsection