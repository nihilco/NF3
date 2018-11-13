@extends('layouts.app')

@section('title', $product->name)

@section('meta', '')

{{ Breadcrumbs::push('Products', url('/products') ) }}
{{ Breadcrumbs::push($product->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $product->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $product->description }}</p>
		</div>
	      </div>

@endsection