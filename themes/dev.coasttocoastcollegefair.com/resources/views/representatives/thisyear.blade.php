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

	@if(\Session::has('message'))
	<!-- Alerts Here -->
	<div class="alert-box">
	  <div class="alert {{ \Session::get('alert-class', 'alert-info') }} fade show" role="alert">
	    <strong>
	    @php
	      if(\Session::get('alert-class') == 'alert-success') {
	        echo "<i class='fas fa-check'></i> Success: ";
	      } elseif (\Session::get('alert-class') == 'alert-warning') {
	        echo '<i class="fas fa-exclamation-triangle"></i> Warning: ';
	      } elseif (\Session::get('alert-class') == 'alert-danger') {
	        echo '<i class="fas fa-exclamation-triangle"></i> Danger: ';
	      } else {
	        echo '<i class="fas fa-info-circle"></i> Info: ';
	      }
	    @endphp
  	    </strong> {{ \Session::get('message') }}
	  </div>
	</div>
	@endif

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
			  <a href="https://{{ $representative->owner->contact->defaultOrganization->website }}" target="_blank">{{ $representative->owner->contact->defaultOrganization->name_display ?? ''}}</a>
			  @if($representative->created_at > \Carbon\Carbon::now()->subWeek())
			  <span class="badge badge-success">New</span>			  
			  @endif
			  
			  @else
			  N/A
			  @endif
			</td>
		        <td><a href="mailto:{{ $representative->owner->email }}" target="_blank">{{ $representative->owner->contact->name->fullName }}</a></td>
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

      <h3 class="title">Representative Registation</h3>

      <p>Don't see your organization on this list? Click the button below to signup for the Coast-to-Coast College Fair.</p>

      <a class="btn btn-primary" href="/representatives/register">Register Now</a>

      @include('partials.contact')

    </div>
  </div>

</div>

@endsection