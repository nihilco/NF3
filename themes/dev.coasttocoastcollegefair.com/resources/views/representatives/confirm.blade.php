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
      <h2 class="">Step 5 of 5</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8">

<h3>Organization</h3>
<table class="table table-bordered table-hover">
  <tr>
    <th>Name</th>
    <td>{{ $org->name_display }}</td>
  </tr>
  <tr>
    <th>Website</th>
    <td>{{ $org->website }}</td>
  </tr>
</table>

<h3>Representative</h3>
<table class="table table-bordered table-hover">
  <tr>
    <th>Name</th>
    <td>{{ $rep->contact->name->fullName }}</td>
  </tr>
  <tr>
    <th>Email</th>
    <td>{{ $rep->email }}</td>
  </tr>  
</table>

<h3>Invoice</h3>
<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Subtotal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Fair Registration</th>
      <td>1</td>
      <td>$150.00</td>
      <td>$150.00</td>
    </tr>
    <tr>
      <th scope="row">Additional Representatives</th>
      <td>{{ session('additional') }}</td>
      <td>${{ number_format(session('additional') * 25, 2) }}</td>
      <td>${{ number_format(session('additional') * 25, 2) }}</td>
    </tr>
    <tr>
      <th scope="row">Scanner Rental</th>
      <td>{{ (session('scanner') == 'yes') ? '1' : '0' }}</td>
      <td>${{ (session('scanner') == 'yes') ? '80.00' : '0.00' }}</td>
      <td>${{ (session('scanner') == 'yes') ? '80.00' : '0.00' }}</td>
    </tr>
    <tr>
      <th scope="row">Service Charge</th>
      <td>1</td>
      <td>$10.00</td>
      <td>$10.00</td>
    </tr>    
  </tbody>
  <tfoot>
    <tr>
      <th scope="row" colspan="3">Total</th>
      <th>${{ number_format($total, 2) }}</th>
    </tr>      
  </tfoot>
</table>

<form method="POST" action="{{ url('/representatives/register') }}">
{{ csrf_field() }}


                  <button type="submit" class="btn btn-primary float-left" name="action" value="back">Back</button>
		  <button type="submit" class="btn btn-primary float-right" name="action" value="confirm">Confirm</button>
</form>

    </div>
    <div class="col-sm-4">



    </div>
  </div>

</div>

@endsection