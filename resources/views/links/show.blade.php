@extends('layouts.app')

@section('title', $link->name)

@section('meta', '')

{{ Breadcrumbs::push('Links', url('/links') ) }}
{{ Breadcrumbs::push($link->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $link->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $link->description }}</p>
		  <p><a href="{{ $link->url }}">{{ url($link->path()) }}</a></p>
		</div>
	      </div>

@endsection