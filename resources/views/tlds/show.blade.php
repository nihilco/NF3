@extends('layouts.admin')

@section('title', $tld->name . ' TLD')

@section('meta', '')

{{ Breadcrumbs::push('TLDs', url('/tlds') ) }}
{{ Breadcrumbs::push($tld->name . ' TLD') }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $tld->name }} TLD</h5>
		</div>
		<div class="card-body">
		  <p>{{ $tld->description }}</p>
		</div>
	      </div>

@endsection