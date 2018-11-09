@extends('layouts.admin')

@section('title', 'Dashboard')

@section('meta', '')

{{ Breadcrumbs::push('Dashboard') }}

@section('content')

@php
$event = App\Models\Event::where('name', 'Fair 2019')->first();
$orgs = App\Models\Organization::all();
@endphp

<div class="row">
<div class="col-sm-3">

<div class="card mb-3">
<div class="card-body">

<div class="row">
<div class="col-8">
<h6>{{ $event->participants->count() }}</h6>
<small>Registered Representatives</small>
</div>
<div class="col-4">
<a href="{{ $event->path() }}" class="btn btn-widget btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>

</div>
</div>

</div>
<div class="col-sm-3">

<div class="card mb-3">
<div class="card-body">

<div class="row">
<div class="col-8">
<h6>{{ $orgs->count() }}</h6>
<small>Organizations</small>
</div>
<div class="col-4">
<a href="{{ url('/organizations') }}" class="btn btn-widget btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>

</div>
</div>

</div>
</div>

@endsection