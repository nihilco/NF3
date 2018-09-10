@extends('layouts.admin')

@section('title', 'Profiles')

@section('meta', '')

{{ Breadcrumbs::push('Profiles', url('/profiles') ) }}
{{ Breadcrumbs::push($user->name) }}

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

@endsection