@extends('layouts.app')

@section('title', $player->name)

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/game')) }}
{{ Breadcrumbs::push('Players', url('/game/players') ) }}
{{ Breadcrumbs::push($player->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $player->name }}</h5>
		</div>
		<div class="card-body">
		  
		</div>
	      </div>

@endsection