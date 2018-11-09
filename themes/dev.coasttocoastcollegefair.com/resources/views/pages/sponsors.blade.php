@extends('layouts.main')

@section('title', 'Sponsors')

@section('meta', '')

{{ Breadcrumbs::push('Sponsors') }}

@section('content')

<div class="container">

  <div class="row">
    <div class="col-12">
      <h1 class="page-title">Sponsors</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8">

      <h2 class="title">Thank you to all our sponsors!</h2>

      <h4>The Baylor School</h4>
      <p><a href="https://www.baylorschool.org/" target="_blank">https://www.baylorschool.org/</a></p>
      <p>Mr. Stephen Jackson, Director of College Counseling<br />
         Ms. Ann Katherine Taylor, Associate Director of College Counseling<br />
         Mr. Michael Richardson, Associate Director of College Counseling</p>

      <h4>Girls Preparatory School</h4>
      <p><a href="http://www.gps.edu/" target="_blank">http://www.gps.edu/</a></p>
      <p>Ms. Susan McCarter, Director of College Counseling<br />
         Ms. Amelia Mann, Associate Director of College Counseling</p>
	 
      <h4>McCallie School</h4>
      <p><a href="http://www.mccallie.org/" target="_blank">http://www.mccallie.org/</a></p>
      <p>Mr. Jeff Kurtzman, Director of College Guidance<br />
         Mr. Brian S. Beckley, Associate Director of College Guidance<br />
         Ms. Abbie Roberts, Assistant Director of College Guidance</p>

      <h4>St. Andrews-Sewanee School</h4>
      <p><a href="http://www.sasweb.org/" target="_blank">http://www.sasweb.org/</a></p>
      <p>Mr. Dan Monahan, Director of College Counseling</p>

    </div>
    <div class="col-sm-4">

      @include('partials.reps-list')

      @include('partials.contact')

    </div>
  </div>

</div>

@endsection