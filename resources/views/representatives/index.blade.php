@extends('layouts.admin')

@section('title', 'Representatives')

@section('meta', '')

{{ Breadcrumbs::push('Representatives') }}

@section('content')

<div class="row">
<div class="col">

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $event->name }}</h5>
		</div>
		<div class="card-body">

		  {{ $event->description }}

		</div>
	      </div>

</div>
</div>

@endsection