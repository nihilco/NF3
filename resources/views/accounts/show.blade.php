@extends('layouts.admin')

@section('title', $account->name)

@section('meta', '')

{{ Breadcrumbs::push('Accounts', url('/accounts') ) }}
{{ Breadcrumbs::push($account->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $account->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $account->description }}</p>
		</div>
	      </div>

@endsection