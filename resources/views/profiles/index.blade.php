@extends('layouts.app')

@section('title', 'Profile')

@section('meta', '')

{{ Breadcrumbs::push('Profile') }}

@section('content')

<div class="row">
  <div class="col">

    <div class="card">
      <div class="card-body">
        <h1 class="display-4">{{ $user->name }}</h1>
        <p class="lead">This is a space for a tagline, motto, blurb, etc.</p>
      </div>
    </div>

  </div>
</div>

<div class="row mt-3">
  <div class="col">

    <div class="card">
      <div class="card-body">

        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Send them a message:</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="You better say something witty..." aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="button-addon2">Post</button>
	      </div>
	    </div>
	    <small id="emailHelp" class="form-text text-muted">A little help text.</small>
	  </div>
        </form>


      </div>
    </div>

  </div>
</div>

<div class="row mt-3">
  <div class="col">

    <div class="card">
      <div class="card-body">

        Feed

      </div>
    </div>

  </div>
</div>

@endsection