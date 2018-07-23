@extends('layouts.admin')

@section('title', $province->name)

@section('meta', '')

{{ Breadcrumbs::push('Provinces', url('/provinces') ) }}
{{ Breadcrumbs::push($province->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $province->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $province->description }}</p>
		</div>
	      </div>

@endsection