@extends('layouts.admin')

@section('title', $website->hostname . ' Website')

@section('meta', '')

{{ Breadcrumbs::push('Websites', url('/websites') ) }}
{{ Breadcrumbs::push($website->hostname) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $website->hostname }}</h5>
		</div>
		<div class="card-body">
		
		</div>
	      </div>

@endsection