@extends('layouts.admin')

@section('title', $zone->domain->domain . ' Zone')

@section('meta', '')

{{ Breadcrumbs::push('Zones', url('/zones') ) }}
{{ Breadcrumbs::push($zone->domain->domain) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $zone->domain->domain }}</h5>
		</div>
		<div class="card-body">

		</div>
	      </div>

@endsection