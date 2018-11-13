@extends('layouts.app')

@section('title', $item->name)

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/game')) }}
{{ Breadcrumbs::push('Items', url('/game/items') ) }}
{{ Breadcrumbs::push($item->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $item->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $item->description }}</p>
		</div>
	      </div>

@endsection