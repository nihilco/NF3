@extends('layouts.admin')

@section('title', 'Accounts')

@section('meta', '')

{{ Breadcrumbs::push('Accounts') }}

@section('content')

<div class="row">
<div class="col-sm-3">

<div class="card mb-3">
<div class="card-body">

<div class="row">
<div class="col-8">
<h6>{{ $accounts->count() }}</h6>
<small>Accounts</small>
</div>
<div class="col-4">
<a href="{{ url('/accounts/create') }}" class="btn btn-widget btn-primary"><i class="fas fa-plus"></i></a>
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
		  <h5 class="card-title mb-0">Accounts List</h5>
		</div>
		<div class="card-body">

                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th scope="col" class="td-count">#</th>
	                <th scope="col">Name</th>
		        <th scope="col">Account Number</th>
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>
                @php
                  $c = 1;
                @endphp
		
		@forelse($accounts as $account)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $account->name }}</td>
		        <td>{{ $account->stripe_id }}</td>
		        <td class="td-action">
			  <a href="{{ url($account->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($account->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $account->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $account->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $account->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Account?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $account->name }} Account?</p>
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
		        <td colspan="4">No accounts at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>


		</div>
	      </div>

</div>
</div>

@endsection