@extends('layouts.main')

@section('title', 'Representatives')

@section('meta', '')

{{ Breadcrumbs::push('Representatives') }}

@section('content')

<div class="container">

  <div class="row">
    <div class="col-12">
      <h1 class="page-title">Representatives</h1>
      <p>{{ $event->participants->count() }} registered organizations.</p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8">

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
			  <a href="{{ $representative->owner->contact->defaultOrganization->website }}">{{ $representative->owner->contact->defaultOrganization->name_display ?? ''}}</a>
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
    <div class="col-sm-4">

      @include('partials.reps-list')

      @include('partials.contact')

    </div>
  </div>

</div>

@endsection