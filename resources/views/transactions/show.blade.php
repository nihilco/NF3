@extends('layouts.admin')

@section('title', $transaction->id . ' Transaction')

@section('meta', '')

{{ Breadcrumbs::push('Transactions', url('/transactions') ) }}
{{ Breadcrumbs::push($transaction->id . ' Transaction') }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $transaction->id }} Transaction</h5>
		</div>
		<div class="card-body">
		  <p>${{ number_format($transaction->total/100,2) }}</p>
		</div>
	      </div>

@endsection