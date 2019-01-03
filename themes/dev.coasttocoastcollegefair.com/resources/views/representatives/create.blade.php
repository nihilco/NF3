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
      <h2 class="">Step 1 of 5</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8">

<form method="POST" action="{{ url('/representatives/register') }}">
{{ csrf_field() }}
<label>Are you a student or organization representative?</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="type" id="type" value="representative" checked>
    <label class="form-check-label" for="representative">
        Representative
	  </label>
	  </div>
                  <button type="submit" class="btn btn-primary mt-2" name="action" value="next">Next</button>
</form>

    </div>
    <div class="col-sm-4">



    </div>
  </div>

</div>

@endsection