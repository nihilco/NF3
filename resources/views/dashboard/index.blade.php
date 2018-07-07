@extends('layouts.admin')

@section('title', 'Dashboard')

@section('meta', '')

{{ Breadcrumbs::push('Dashboard') }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title">Dashboard</h5>
		  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
		</div>
		<div class="card-body">
		  <h5 class="card-title">Special title treatment</h5>
		  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		  <a href="#" class="btn btn-primary mb-3">Go somewhere</a>
		  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  <a href="#" class="card-link">Card link</a>
		  <a href="#" class="card-link">Another link</a>
		</div>
		<div class="card-footer text-muted">
		  2 days ago
		</div>
	      </div>

@endsection