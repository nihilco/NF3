@extends('layouts.admin')

@section('title', 'List Servers')

@section('meta', '')

{{ Breadcrumbs::push('Servers', url('/servers')) }}
{{ Breadcrumbs::push('List') }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Addresses List</h5>
		</div>
		<div class="card-body">

                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th scope="col" class="td-count">#</th>
	                <th scope="col">Name</th>
		        <th scope="col">Address</th>
			<th scope="col">City</th>
			<th scope="col">Province</th>
			<th scope="col">Postal Code</th>
			<th scope="col">Country</th>
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>
                @php
                  $c = 1;
                @endphp
		
		@forelse($addresses as $address)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $address->name }}</td>
		        <td>{{ $address->address1 }}</td>
			<td>{{ $address->city }}</td>
			<td>{{ $address->province->code }}</td>
			<td>{{ $address->postal_code }}</td>
			<td>{{ $address->country->code }}</td>
		        <td class="td-action">
			  <a href="{{ url($address->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($address->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $address->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $address->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $address->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Address?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the address for {{ $address->name }}?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
			</td>
		      </tr>

		      @php
		        $c++;
		      @endphp

		@empty

		      <tr>
		        <td colspan="8">No addresses at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>


		</div>
	      </div>

@endsection