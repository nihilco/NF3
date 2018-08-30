@extends('layouts.admin')

@section('title', $post->name)

@section('meta', '')

{{ Breadcrumbs::push('Posts', url('/posts') ) }}
{{ Breadcrumbs::push($post->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $post->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $post->description }}</p>
		</div>
	      </div>

@endsection