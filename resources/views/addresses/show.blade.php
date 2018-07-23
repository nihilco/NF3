@extends('layouts.admin')

@section('title', $address->name . ' Address')

@section('meta', '')

{{ Breadcrumbs::push('Addresses', url('/addresses') ) }}
{{ Breadcrumbs::push($address->name . ' Address') }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $address->name }} Address</h5>
		</div>
		<div class="card-body">
		  <p>{{ $address->address1 }}</p>
		</div>
	      </div>

@endsection