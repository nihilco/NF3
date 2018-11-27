@extends('layouts.app')

@section('title', 'Participant')

@section('meta', '')

{{ Breadcrumbs::push('Participants', url('/participants') ) }}
{{ Breadcrumbs::push($participant->id) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $participant->owner->contact->name->fullName }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $participant->event->name }}</p>
		</div>
	      </div>

@endsection