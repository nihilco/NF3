@extends('layouts.app')

@section('title', $event->name)

@section('meta', '')

{{ Breadcrumbs::push('Events', url('/events') ) }}
{{ Breadcrumbs::push($event->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $event->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $event->description }}</p>
		</div>
	      </div>

@endsection