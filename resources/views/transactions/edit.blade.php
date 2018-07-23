@extends('layouts.admin')

@section('title', 'Create Transaction')

@section('meta', '')

{{ Breadcrumbs::push('Transactions', url('/transactions') ) }}
{{ Breadcrumbs::push('Edit') }}

@section('content')

	    <form method="POST" action="{{ url($transaction->path()) }}">
	      {{ csrf_field() }}
	      {{ method_field('PATCH') }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Transaction</h5>
		</div>
		<div class="card-body">
		    <div class="form-group">
                      <label for="account">Account</label>
       		      <select class="form-control{{ $errors->first('account') ? ' is-invalid' : '' }}" id="account" name="account">
		        @php
			    $v = old('account') ?? $transaction->account_id;
			@endphp
		        <option></option>
			@foreach($accounts as $account)
		        <option value="{{ $account->id }}"{{ ($v == $account->id) ? ' selected' : '' }}>{{ $account->name }}</option>
			@endforeach
		      </select>
		      @if($errors->first('account'))
		      <small id="accountHelp" class="form-text invalid-feedback">{{ $errors->first('account') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="account">Customer</label>
       		      <select class="form-control{{ $errors->first('customer') ? ' is-invalid' : '' }}" id="customer" name="customer">
		        @php
			    $v = old('customer') ?? $transaction->customer_id;
			@endphp
		        <option></option>
			@foreach($customers as $customer)
		        <option value="{{ $customer->id }}"{{ ($v == $customer->id) ? ' selected' : '' }}>{{ $customer->owner->email }}</option>
			@endforeach
		      </select>
		      @if($errors->first('customer'))
		      <small id="customerHelp" class="form-text invalid-feedback">{{ $errors->first('customer') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="invoice">Invoice</label>
       		      <select class="form-control{{ $errors->first('invoice') ? ' is-invalid' : '' }}" id="invoice" name="invoice">
		        @php
			    $v = old('invoice') ?? $transaction->invoice_id;
			@endphp
		        <option></option>
			@foreach($invoices as $invoice)
		        <option value="{{ $invoice->id }}"{{ ($v == $invoice->id) ? ' selected' : '' }}>{{ $invoice->id }}</option>
			@endforeach
		      </select>
		      @if($errors->first('invoice'))
		      <small id="invoiceHelp" class="form-text invalid-feedback">{{ $errors->first('invoice') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="type">Type</label>
       		      <select class="form-control{{ $errors->first('type') ? ' is-invalid' : '' }}" id="type" name="type">
		        @php
			    $v = old('type') ?? $transaction->type;
			@endphp
		        <option></option>
		        <option value="donation"{{ ($v == 'donation') ? ' selected' : '' }}>Donation</option>
			<option value="payment"{{ ($v == 'payment') ? ' selected' : '' }}>Payment</option>
			<option value="refund"{{ ($v == 'refund') ? ' selected' : '' }}>Refund</option>
		      </select>
		      @if($errors->first('type'))
		      <small id="typeHelp" class="form-text invalid-feedback">{{ $errors->first('type') }}</small>
		      @endif
	            </div>		    
		    <div class="form-group">
                      <label for="total">Total</label>
                      <input type="text" class="form-control{{ $errors->first('total') ? ' is-invalid' : '' }}" id="total" name="total" value="{{ old('total') ?? $transaction->total}}" />
		      @if($errors->first('total'))
		      <small id="totalHelp" class="form-text invalid-feedback">{{ $errors->first('total') }}</small>
		      @endif
	            </div>
     	            <div class="form-group">
		      <label for="notes">Notes</label>
		      <textarea class="form-control{{ $errors->first('notes') ? ' is-invalid' : '' }}" id="notes" name="notes" rows="3">{{ old('notes') ?? $transaction->notes }}</textarea>
		      @if($errors->first('notes'))
		      <small id="notesHelp" class="form-text invalid-feedback">{{ $errors->first('notes') }}</small>
		      @endif
		    </div>
		</div>
		<div class="card-footer text-muted">
                  <button type="submit" class="btn btn-primary">Edit</button>
                  <button type="reset" class="btn btn-link">Reset</button>
		</div>
	      </div>
	    </form>

@endsection