@extends('layouts.app')

@section('title', $event->name)

@section('meta', '')

{{ Breadcrumbs::push('Events', url('/events') ) }}
{{ Breadcrumbs::push($event->name) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $event->name }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $event->description }}</p>

		  <h6>Participants</h6>
      <p>{{ $event->participants->count() }} registered organizations.</p>

<div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
	                <th scope="col">Organization</th>
		        <th scope="col">Representative</th>
		      </tr>
   	            </thead>
		    <tbody>
		
		@forelse($event->participants->sortBy('owner.contact.defaultOrganization.name_alpha') as $representative)

		      <tr>
		        <td>
			  @if($representative->owner->contact->defaultOrganization)
			  <a href="{{ url($representative->owner->contact->defaultOrganization->website) }}">{{ $representative->owner->contact->defaultOrganization->name_display ?? ''}}</a>
			  @elseif($representative->owner->contact->defaultOrganization)
			  {{ $representative->owner->contact->defaultOrganization->name_display ?? ''}}
			  @else
			  N/A
			  @endif
			  </td>
		        <td><a href="mailto:{{ $representative->owner->email }}">{{ $representative->owner->contact->name->fullName }}</a></td>
		      </tr>

		@empty

		      <tr>
		        <td colspan="2">No representatives at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>

		</div>
	      </div>

@endsection