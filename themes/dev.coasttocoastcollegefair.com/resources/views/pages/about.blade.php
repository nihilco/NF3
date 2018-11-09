@extends('layouts.main')

@section('title', 'About')

@section('meta', '')

{{ Breadcrumbs::push('About') }}

@section('content')

<div class="container">

  <div class="row">
    <div class="col-12">
      <h1 class="page-title">About</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8">

      <h2 class="title">Welcome to the Coast to Coast College Fair</h2>
      <p><img class="img-fluid" src="{{  url('/img/about.jpg') }}" alt="" /></p>


<p>The Coast-to-Coast College Fair offers both students and parents involved in a college search the opportunity to meet with representatives from colleges and universities of interest to obtain additional information regarding program availability, housing, admission requirements, tuition and other details.</p>

<p>The Fair, which is open to all area students, their parents and high school counselors, is expected to host over 130 representatives from colleges and universities from around the country. To view a list of who attended the 2018 Coast-to-Coast College Fair, click <a href="/representatives/last-year">here</a>.</p>

<p>There will be a dinner reception prior to the fair at the Chattanooga Convention and Trade Center for college representatives and high school college counselors. Signs will be posted the day of the college fair with directions to the exact location.</p>

<p>The Fair will open promptly at 6:30 p.m. and will last two hours. Students and parents are urged to attend the Fair together.</p>

    </div>
    <div class="col-sm-4">

      @include('partials.reps-list')

      @include('partials.contact')

    </div>
  </div>

</div>

@endsection