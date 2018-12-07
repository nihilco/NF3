@extends('layouts.admin')

@section('title', $country->name)

@section('meta', '')

{{ Breadcrumbs::push('Countries', url('/countries') ) }}
{{ Breadcrumbs::push($country->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $country->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $country->description }}</p>
		</div>
	      </div>

@endsection