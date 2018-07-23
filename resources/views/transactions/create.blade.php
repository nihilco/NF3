@extends('layouts.admin')

@section('title', 'Create Transaction')

@section('meta', '')

{{ Breadcrumbs::push('Transactions', url('/transactions') ) }}
{{ Breadcrumbs::push('Create') }}

@section('content')

            <form method="POST" action="{{ url('/transactions') }}">
	      {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Transaction</h5>
		</div>
		<div class="card-body">
		    <div class="form-group">
                      <label for="account">Account</label>
       		      <select class="form-control{{ $errors->first('account') ? ' is-invalid' : '' }}" id="account" name="account">
		        <option></option>
			@foreach($accounts as $account)
		        <option value="{{ $account->id }}"{{ (old('account') == $account->id) ? ' selected' : '' }}>{{ $account->name }}</option>
			@endforeach
		      </select>
		      @if($errors->first('account'))
		      <small id="accountHelp" class="form-text invalid-feedback">{{ $errors->first('account') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="account">Customer</label>
       		      <select class="form-control{{ $errors->first('customer') ? ' is-invalid' : '' }}" id="customer" name="customer">
		        <option></option>
			@foreach($customers as $customer)
		        <option value="{{ $customer->id }}"{{ (old('customer') == $customer->id) ? ' selected' : '' }}>{{ $customer->owner->email }}</option>
			@endforeach
		      </select>
		      @if($errors->first('customer'))
		      <small id="customerHelp" class="form-text invalid-feedback">{{ $errors->first('customer') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="invoice">Invoice</label>
       		      <select class="form-control{{ $errors->first('invoice') ? ' is-invalid' : '' }}" id="invoice" name="invoice">
		        <option></option>
			@foreach($invoices as $invoice)
		        <option value="{{ $invoice->id }}"{{ (old('invoice') == $invoice->id) ? ' selected' : '' }}>{{ $invoice->id }}</option>
			@endforeach
		      </select>
		      @if($errors->first('invoice'))
		      <small id="invoiceHelp" class="form-text invalid-feedback">{{ $errors->first('invoice') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="type">Type</label>
       		      <select class="form-control{{ $errors->first('type') ? ' is-invalid' : '' }}" id="type" name="type">
		        <option></option>
		        <option value="donation"{{ (old('type') == 'donation') ? ' selected' : '' }}>Donation</option>
			<option value="payment"{{ (old('type') == 'payment') ? ' selected' : '' }}>Payment</option>
			<option value="refund"{{ (old('type') == 'refund') ? ' selected' : '' }}>Refund</option>
		      </select>
		      @if($errors->first('type'))
		      <small id="typeHelp" class="form-text invalid-feedback">{{ $errors->first('type') }}</small>
		      @endif
	            </div>		    
		    <div class="form-group">
                      <label for="total">Total</label>
                      <input type="text" class="form-control{{ $errors->first('total') ? ' is-invalid' : '' }}" id="total" name="total" value="{{ old('total') }}" />
		      @if($errors->first('total'))
		      <small id="totalHelp" class="form-text invalid-feedback">{{ $errors->first('total') }}</small>
		      @endif
	            </div>
     	            <div class="form-group">
		      <label for="notes">Notes</label>
		      <textarea class="form-control{{ $errors->first('notes') ? ' is-invalid' : '' }}" id="notes" name="notes" rows="3">{{ old('notes') }}</textarea>
		      @if($errors->first('notes'))
		      <small id="notesHelp" class="form-text invalid-feedback">{{ $errors->first('notes') }}</small>
		      @endif
		    </div>
		</div>
		<div class="card-footer text-muted">
                  <button type="submit" class="btn btn-primary">Create</button>
                  <button type="reset" class="btn btn-link">Reset</button>
		</div>
	      </div>
	    </form>

@endsection