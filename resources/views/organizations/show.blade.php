@extends('layouts.app')

@section('title', $organization->name_display)

@section('meta', '')

{{ Breadcrumbs::push('Organizations', url('/organizations') ) }}
{{ Breadcrumbs::push($organization->name_display) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $organization->name_display }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $organization->description }}</p>
		</div>
	      </div>

@endsection