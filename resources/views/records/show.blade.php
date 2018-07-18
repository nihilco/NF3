@extends('layouts.admin')

@section('title', $record->name . ' Record')

@section('meta', '')

{{ Breadcrumbs::push('Records', url('/records') ) }}
{{ Breadcrumbs::push($record->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $record->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $record->data }}</p>
		</div>
	      </div>

@endsection