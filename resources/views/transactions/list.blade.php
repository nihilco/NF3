@extends('layouts.admin')

@section('title', 'List Transactions')

@section('meta', '')

{{ Breadcrumbs::push('Transactions', url('/transactions')) }}
{{ Breadcrumbs::push('List') }}

@section('content')

	     <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Transactions List</h5>
		</div>
		<div class="card-body">

                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th scope="col" class="td-count">#</th>
	                <th scope="col">Account</th>
		        <th scope="col">Customer</th>
			<th scope="col">Invoice</th>
			<th scope="col">Type</th>
			<th scope="col">Amount</th>
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>
                @php
                  $c = 1;
                @endphp
		
		@forelse($transactions as $transaction)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $transaction->account->name }}</td>
			<td>{{ $transaction->customer->owner->email }}</td>
			<td>{{ $transaction->invoice->id }}</td>
			<td>{{ $transaction->type }}</td>
			<td>{{ $transaction->amount }}</td>
		        <td class="td-action">
			  <a href="{{ url($transaction->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($transaction->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $transaction->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $transaction->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $transaction->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Transaction?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $transaction->id }} Transaction?</p>
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
		        <td colspan="7">No transactions at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>


		</div>
	      </div>

@endsection