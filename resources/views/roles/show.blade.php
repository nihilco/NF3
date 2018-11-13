@extends('layouts.app')

@section('title', $role->name)

@section('meta', '')

{{ Breadcrumbs::push('Roles', url('/roles') ) }}
{{ Breadcrumbs::push($role->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $role->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $role->description }}</p>
		</div>
	      </div>

@endsection