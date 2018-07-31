@extends('layouts.admin')

@section('title', 'Invoice')

@section('meta', '')

{{ Breadcrumbs::push('Invoices', url('/invoices') ) }}
{{ Breadcrumbs::push('Invoice') }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Invoice</h5>
		</div>
		<div class="card-body">

		<div class="container-fluid">

		  <div class="row">
		    		    <div class="col-sm-4">

		      <div class="row">
		        <div class="col text-primary">
			  <h1>{{ strtoupper($invoice->type) }}</h1>
			</div>
		      </div>
		      <div class="row mb-2">
			<div class="col">
			  Due Date: {{ $invoice->due_at->toFormattedDateString() }}
			</div>
		      </div>
		      <div class="row">
		        <div class="col">
			The NIHIL Corporation<br />
			6409 Sail Pointe Lane<br />
			Hixson, TN 37343<br />
			<a href="mailto:billing@nihil.co" target="_blank">billing@nihil.co</a>
			</div>
		      </div>
		      <div class="row">
		        <div class="col">
			  @if($invoice->status == 'new')
			  <span class="badge badge-primary">{{ $invoice->status }}</span>
			  @elseif($invoice->status == 'paid')
			  <span class="badge badge-success">{{ $invoice->status }}</span>
			  @elseif($invoice->status == 'late')
			  <span class="badge badge-warning">{{ $invoice->status }}</span>
			  @elseif($invoice->status == 'overdue')
			  <span class="badge badge-danger">{{ $invoice->status }}</span>
			  @else
			  <span class="badge badge-secondary">{{ $invoice->status }}</span>
			  @endif
			</div>
		      </div>
		    </div>
		    <div class="col-sm-4">

		      <table class="table table-bordered">
		        <thead>
			  <tr class="bg-primary text-white">
			    <th>Billing Address</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
			    <td>{{ $invoice->billingAddress->name }}</td>
			  </tr>
			  <tr>
			    <td>{{ $invoice->billingAddress->address1 }}</td>
			  </tr>
			  @if($invoice->billingAddress->address2)
			  <tr>
		      	    <td>{{ $invoice->billingAddress->address2 }}</td>
			  </tr>  
		      	  @endif
			  <tr>
			    <td>{{ $invoice->billingAddress->city . ', ' . $invoice->billingAddress->province->code . ' ' . $invoice->billingAddress->postal_code }}</td>
			  </tr>
			  <tr>
			    <td>{{ $invoice->billingAddress->owner->email }}</td>
			  </tr>
			</tbody>
		      </table>

		    </div>
		    <div class="col-sm-4">

		      <table class="table table-bordered">
		        <thead>
			  <tr class="bg-primary text-white">
			    <th>Shipping Address</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
			    <td>{{ $invoice->shippingAddress->name }}</td>
			  </tr>
			  <tr>
			    <td>{{ $invoice->shippingAddress->address1 }}</td>
			  </tr>
			  @if($invoice->shippingAddress->address2)
			  <tr>
		      	    <td>{{ $invoice->shippingAddress->address2 }}</td>
			  </tr>  
		      	  @endif
			  <tr>
			    <td>{{ $invoice->shippingAddress->city . ', ' . $invoice->billingAddress->province->code . ' ' . $invoice->billingAddress->postal_code }}</td>
			  </tr>
			  <tr>
			    <td>{{ $invoice->shippingAddress->owner->email }}</td>
			  </tr>
			</tbody>
		      </table>
		      
		    </div>
		  </div>

		  <div class="row mt-2">
		    <div class="col-sm-12">

		      <table class="table table-bordered table-striped">
		        <thead>
			  <tr class="bg-primary text-white">		
                            <th scope="col">#</th>
	                    <th scope="col">Item</th>
		            <th scope="col">Quantity</th>
			    <th scope="col">Price</th>
			    <th scope="col">Subtotal</th>
			  </tr>
			</thead>
			<tbody>
			  
		      @php
		        $c = 1;
		      @endphp

		      @forelse($invoice->items as $item)

		      <tr>
			    <th scope="row">{{ $c }}</th>
			    <td>
			    {{ $item->name }}
			    <small>{{ $item->description }}</small>
			    </td>
			    <td>{{ $item->units }}</td>
			    <td>{{ ($item->unit_price < 0) ? '-$' : '$' }}{{ number_format(abs($item->unit_price)/100, 2) }}</td>
			    <td>{{ ($item->subtotal < 0) ? '-$' : '$' }}{{ number_format(abs($item->subtotal)/100, 2) }}</td>
			  </tr>


		      @php
		      $c++;
		      @endphp

		      @empty

		      <tr>
		        <td colspan="5">No items on this invoice.</td>
		      </tr>

		      @endforelse

                        </tbody>
		      </table>


		    </div>
		  </div>

		  <div class="row">
		    <div class="col-sm-8">
		    
		      @if($invoice->notes)
		        <table class="table table-bordered">
			  <thead>
			    <tr class="bg-secondary text-white">
			      <th>Notes</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>{{ $invoice->notes }}</td>
			    </tr>
			  </tbody>
			</table>
		      @endif
		      
		    </div>
		    <div class="col-sm-4">

		      <table class="table table-bordered">
			<tbody>
			  <tr>
			    <th>Subtotal</th>
			    <td>${{ number_format($invoice->subtotal/100, 2) }}</td>
			  </tr>
			  <tr>
			    <th>Tax Rate</th>
			    <td>{{ number_format($invoice->tax_rate/100, 2) }}%</td>
			  </tr>
			  <tr>
			    <th>Tax</th>
			    <td>${{ number_format($invoice->tax/100, 2) }}</td>
			  </tr>
			  <tr>
			    <th>Shipping</th>
			    <td>${{ number_format($invoice->shipping/100, 2) }}</td>
			  </tr>
			  <tr class="bg-success text-white">
			    <th>Total</th>
			    <th>${{ number_format($invoice->total/100, 2) }}</th>
			  </tr>
			</tbody>
		      </table>

		    </div>
		  </div>

		  </div>

		</div>
	      </div>

@endsection