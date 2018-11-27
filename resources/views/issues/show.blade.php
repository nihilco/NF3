@extends('layouts.app')

@section('title', $issue->subject)

@section('meta', '')

{{ Breadcrumbs::push('Issues', url('/issues') ) }}
{{ Breadcrumbs::push($issue->id) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $issue->subject }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $issue->content }}</p>
		</div>
	      </div>

@endsection