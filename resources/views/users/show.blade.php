@extends('layouts.app')

@section('title', $user->username)

@section('meta', '')

{{ Breadcrumbs::push('Users', url('/users') ) }}
{{ Breadcrumbs::push($user->username) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $user->username }}</h5>
		</div>
		<div class="card-body">
		
		</div>
	      </div>

@endsection