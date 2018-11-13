@extends('layouts.app')

@section('title', $stat->name)

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/countries') ) }}
{{ Breadcrumbs::push('Stats', url('/game/stats') ) }}
{{ Breadcrumbs::push($stat->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $stat->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $stat->description }}</p>
		  <p>Refreshes at a rate of {{ $stat->fullRefreshString }}</p>
		</div>
	      </div>

@endsection