@extends('layouts.admin')

@section('title', $domain->domain)

@section('meta', '')

{{ Breadcrumbs::push('Domains', url('/domains') ) }}
{{ Breadcrumbs::push($domain->domain) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $domain->domain }}</h5>
		</div>
		<div class="card-body">

		</div>
	      </div>

@endsection