@extends('layouts.main')

@section('title', 'Registration')

@section('meta', '')

{{ Breadcrumbs::push('Representatives', url('/representatives')) }}
{{ Breadcrumbs::push('Registration') }}

@section('content')

<div class="container pb-2">

  <div class="row">
    <div class="col-12">
      <h1 class="page-title">Representative Registration</h1>
      <h2 class="">Step 4 of 5</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8">

<form method="POST" action="{{ url('/representatives/register') }}" id="payment-form">
{{ csrf_field() }}

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="card-tab" data-toggle="tab" href="#card" role="tab" aria-controls="card" aria-selected="true">Credit Card</a>
  </li>
  <!--<li class="nav-item">
    <a class="nav-link" id="ba-tab" data-toggle="tab" href="#bank" role="tab" aria-controls="bank" aria-selected="false">Bank Account</a>
  </li>-->
  <!--<li class="nav-item">
    <a class="nav-link" id="mail-tab" data-toggle="tab" href="#mail" role="tab" aria-controls="mail" aria-selected="false">Mail</a>
  </li>-->
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="card" role="tabpanel" aria-labelledby="card-tab">

		    <div class="form-group mt-2">
                      <label for="name">Name on Card</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>

		    <div class="row">
		        <div class="col-12">

		    <div class="form-group">
                      <label for="card">Debit or Credit Card</label>
		      <div id="card-element">
		        <!-- A Stripe Element will be inserted here. -->
		      </div>
		      <!-- Used to display form errors. -->
                      <small id="card-errors" role="alert" class="form-text text-danger"></small>
	            </div>

</div>
</div>


  </div>
  <div class="tab-pane fade" id="bank" role="tabpanel" aria-labelledby="bank-tab">
    ...
  </div>
  <div class="tab-pane fade" id="mail" role="tabpanel" aria-labelledby="mail-tab">

		    <div class="form-group mt-2">
                      <label for="mail">I wish to mail in my payment</label>
       		      <select class="form-control{{ $errors->first('mail') ? ' is-invalid' : '' }}" id="mail" name="mail">
		        <option value="no"{{ (old('mail') == 'no' || !old('mail')) ? ' selected' : '' }}>No</option>
			<option value="yes"{{ (old('mail') == 'yes') ? ' selected' : '' }}>Yes</option>
		      </select>
		      @if($errors->first('mail'))
		      <small id="mailHelp" class="form-text invalid-feedback">{{ $errors->first('mail') }}</small>
		      @endif
	            </div>

  </div>
</div>

                  <button type="submit" class="btn btn-primary">Next</button>
</form>


    </div>
    <div class="col-sm-4">



    </div>
  </div>

</div>

@endsection