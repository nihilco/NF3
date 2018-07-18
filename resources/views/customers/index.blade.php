@extends('layouts.admin')

@section('title', 'Customers')

@section('meta', '')

{{ Breadcrumbs::push('Customers') }}

@section('content')

<div class="row">
<div class="col-sm-3">

<div class="card mb-3">
<div class="card-body">

<div class="row">
<div class="col-8">
<h6>{{ $customers->count() }}</h6>
<small>Customers</small>
</div>
<div class="col-4">
<a href="{{ url('/customers/create') }}" class="btn btn-widget btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>

</div>
</div>

</div>
<div class="col-sm-3">



</div>
</div>
<div class="row">
<div class="col">

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Customers List</h5>
		</div>
		<div class="card-body">

                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th scope="col" class="td-count">#</th>
			<th scope="col">Stripe ID</th>
	                <th scope="col">User</th>			
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>
                @php
                  $c = 1;
                @endphp
		
		@forelse($customers as $customer)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
			<td>{{ $customer->stripe_id }}</td>
		        <td>{{ $customer->owner->email }}</td>
		        <td class="td-action">
			  <a href="{{ url($customer->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($customer->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $customer->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $customer->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $customer->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Customer?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $customer->name }} Customer?</p>
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
		        <td colspan="4">No customers at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>


		</div>
	      </div>

</div>
</div>

@endsection