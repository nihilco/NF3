@extends('layouts.admin')

@section('title', $category->name)

@section('meta', '')

{{ Breadcrumbs::push('Categories', url('/categories') ) }}
{{ Breadcrumbs::push($category->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $category->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $category->description }}</p>
		</div>
	      </div>

@endsection