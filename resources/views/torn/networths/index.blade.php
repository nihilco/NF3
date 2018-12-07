@extends('layouts.app')

@section('title', 'Networths')

@section('meta', '')

{{ Breadcrumbs::push('Torn', url('/torn')) }}
{{ Breadcrumbs::push('Networths') }}

@section('content')

	        <div class="table-responsive">
                  <table class="table table-responsive-sm {{ ($networths->count()) ? 'table-hover ' : ''}}table-outline">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="td-count">#</th>
			<th scope="col">Player</th>
			<th scope="col">Pending</th>
		        <th scope="col">Wallet</th>
			<th scope="col">Bank</th>
			<th scope="col">Points</th>
			<th scope="col">Cayman</th>
			<th scope="col">Vault</th>
			<th scope="col">Piggy Bank</th>
			<th scope="col">Items</th>
			<th scope="col">Display Case</th>
			<th scope="col">Bazaar</th>
			<th scope="col">Properties</th>
			<th scope="col">Stock Market</th>
			<th scope="col">Auction House</th>
			<th scope="col">Company</th>
			<th scope="col">Bookie</th>
			<th scope="col">Loan</th>
			<th scope="col">Unpaid Fees</th>
			<th scope="col">Total</th>
			<th scope="col">Date</th>
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>
                @php
                  $c = 1;
                @endphp
		
		@forelse($networths as $networth)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $networth->player->name }}</td>
			<td>@currency($networth->pending)</td>
			<td>@currency($networth->wallet)</td>
			<td>@currency($networth->bank)</td>
			<td>@currency($networth->points)</td>
			<td>@currency($networth->cayman)</td>
			<td>@currency($networth->vault)</td>
			<td>@currency($networth->piggybank)</td>
			<td>@currency($networth->items)</td>
			<td>@currency($networth->displaycase)</td>
			<td>@currency($networth->bazaar)</td>
			<td>@currency($networth->properties)</td>
			<td>@currency($networth->stockmarket)</td>
			<td>@currency($networth->auctionhouse)</td>
			<td>@currency($networth->company)</td>
			<td>@currency($networth->bookie)</td>
		        <td>@currency($networth->loan)</td>
			<td>@currency($networth->unpaidfees)</td>
			<td>@currency($networth->total)</td>
		        <td class="td-action">
			  <a href="{{ url($networth->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($networth->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $networth->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $networth->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $networth->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Networth?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $networth->id }} Networth?</p>
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
		        <td colspan="21">No networths at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>
                </div>
		{{ $networths->links() }}

@endsection