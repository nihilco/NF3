@extends('layouts.admin')

@section('title', $customer->owner->email)

@section('meta', '')

{{ Breadcrumbs::push('Customers', url('/customers') ) }}
{{ Breadcrumbs::push($customer->owner->email) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $customer->owner->email }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $customer->stripe_id }}</p>
		</div>
	      </div>

@endsection