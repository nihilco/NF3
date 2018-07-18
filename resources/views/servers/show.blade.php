@extends('layouts.admin')

@section('title', $server->name . ' Server')

@section('meta', '')

{{ Breadcrumbs::push('Servers', url('/servers') ) }}
{{ Breadcrumbs::push($server->name . ' Server') }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $server->name }} Server</h5>
		</div>
		<div class="card-body">
		  <p>{{ $server->description }}</p>
		</div>
	      </div>

@endsection