@extends('layouts.admin')

@section('title', $page->name)

@section('meta', '')

{{ Breadcrumbs::push('Pages', url('/pages') ) }}
{{ Breadcrumbs::push($page->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $page->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $page->description }}</p>
		</div>
	      </div>

@endsection