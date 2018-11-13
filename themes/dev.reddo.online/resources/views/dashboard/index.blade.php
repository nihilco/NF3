@extends('layouts.app')

@section('title', 'Dashboard')

@section('meta', '')

{{ Breadcrumbs::push('Dashboard') }}

@section('content')

<div class="row">

  <div class="col-sm-6 col-md-2">
    <div class="card">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="icon-user"></i>
        </div>
        <div class="text-value">{{ \App\Models\Game\Player::count() }}</div>
        <small class="text-muted text-uppercase font-weight-bold">Players</small>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-2">
    <div class="card">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="icon-chart"></i>
        </div>
        <div class="text-value">{{ \App\Models\Game\Stat::count() }}</div>
        <small class="text-muted text-uppercase font-weight-bold">Stats</small>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-2">
    <div class="card">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="fa fa-futbol"></i>
        </div>
        <div class="text-value">{{ \App\Models\Game\Skill::count() }}</div>
        <small class="text-muted text-uppercase font-weight-bold">Skills</small>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-2">
    <div class="card">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="fa fa-star"></i>
        </div>
        <div class="text-value">{{ \App\Models\Game\Activity::count() }}</div>
        <small class="text-muted text-uppercase font-weight-bold">Activities</small>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-2">
    <div class="card">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="fa fa-cubes"></i>
        </div>
        <div class="text-value">{{ \App\Models\Game\Item::count() }}</div>
        <small class="text-muted text-uppercase font-weight-bold">Items</small>
      </div>
    </div>
  </div>

</div>

@endsection