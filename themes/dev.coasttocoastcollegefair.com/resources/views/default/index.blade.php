@extends('layouts.main')

@section('title', 'Home')

@section('meta', '')

{{ Breadcrumbs::push('Home') }}

@section('content')

<!-- CAROUSEL -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>    
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ url('/img/banner3.jpg') }}" alt="First slide" />
          <div class="carousel-caption d-none d-md-block">
            <h5 class="carousel-caption-title">STUDENTS: SIGNUP FOR THE COAST TO COAST COLLEGE FAIR</h5>
            <p class="carousel-caption-body">Go to gotocollegefairs.com to signup and get your barcode.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ url('/img/banner2.jpg') }}" alt="Second slide" />
          <div class="carousel-caption d-none d-md-block">
            <h5 class="carousel-caption-title">REPRESENTATIVES: REGISTER YOUR ORGANIZATION</h5>
            <p class="carousel-caption-body">Make sure your college or university is represented. Register Online!</p>
          </div>      
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ url('/img/banner1.jpg') }}" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="carousel-caption-title">PARENTS: PREPARE ALONGSIDE YOUR SON/DAUGHTER</h5>
            <p class="carousel-caption-body">College is a family decision, make sure everyone is prepared.</p>
          </div>      
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ url('/img/banner4.jpg') }}" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="carousel-caption-title">WE KNOW YOU HAVE QUESTIONS</h5>
            <p class="carousel-caption-body">Here are some Fequently Asked Questions.</p>
          </div>      
        </div>    
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<!-- /CAROUSEL -->

<!-- CTA -->
    <div class="container-fluid">

      <div class="card" style="background:#444444; color:#FFF; border-radius:0; margin-top:15px;">
        <div class="card-body">

          <div class="row">
            <div class="col-sm-8">
              <h2>All STUDENTS Need To Signup</h2>
              <p>Advance signup for students is required! Signup and get your barcode at gotocollegefairs.com. (This site is for students only. Your info is translated into a barcode that you print and bring to the fair. College representatives will have a barcode scanner to securely capture the registration information you provided online. Colleges get complete, accurate, legible information, EVERY TIME.)</p>
            </div>
            <div class="col-sm-4 text-center">
              <a class="btn btn-cta" href="https://register.gotocollegefairs.com/Registration/EventSelectForState?StateName=Tennessee" target="_blank"><i class="fa fa-play-circle"></i>Signup Now</a>
            </div>
          </div>

        </div>
      </div><!-- /card -->

    </div>
<!-- /CTA -->

<!-- NEWS -->
    <div class="container-fluid">

      <div class="card" style="background:#f5f5f5; border-top:2px solid #00447C;border-radius:0; margin-top:15px;">
        <div class="card-body">

          <div class="row">
            <div class="col-12">
              <h2>Latest News</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">

              <div class="row">
                <div class="col-sm-4">
                  <img class="img-fluid w-100" src="{{ url('/img/news-thumb-5.jpg') }}" alt="" />
                </div>
                <div class="col-sm-8">

                  <h3 class="news-heading">New Date!</h3>
                  <p>The Fair is a month earlier this year and will be held on March 5, 2019. Register now so you do not miss out!</p>

                </div>
              </div>

            </div>
            <div class="col-sm-4">

              <div class="row">
                <div class="col-sm-4">
                  <img class="img-fluid w-100" src="{{ url('/img/news-thumb-2.jpg') }}" alt="" />
                </div>
                <div class="col-sm-8">

                  <h3 class="new-heading">Registration Opens</h3>
                  <p>Registration for the 2019 Coast to Coast College Fair opens September 10th. Register your organization now to avoid a late fee.</p>
		  
                </div>
              </div>
    
            </div>
            <div class="col-sm-4">

              <div class="row">
                <div class="col-sm-4">
                  <img class="img-fluid w-100" src="{{ url('/img/centrecollege.jpg') }}" alt="" />
                </div>
                <div class="col-sm-8">

                  <h3 class="news-heading">Centre College Registered</h3>
                  <p>Sara Morency will be representing Centre College at this year's Coast to Coast College Fair. Interested in Centre? Send her an email.</p>

                </div>
              </div>

            </div>
          </div>

        </div>
      </div><!-- /card -->

    </div>
<!-- /NEWS -->


<div class="container-fluid">

<div class="row">
<div class="col-sm-3">

<div class="card" style="background:#f5f5f5; border-top:2px solid #00447C;border-radius:0; margin-top:15px;">
<div class="card-body">

<div class="row">
<div class="col-12">
<h2>Dates and Deadlines</h2>
</div>
</div>

</div>

<ul class="list-group list-group-flush">
  <li class="list-group-item">

    <div class="event-details">
      <h3 class="event-title">Registration Opens</h3>
      <p class="event-date"><i class="fas fa-calendar-alt"></i> September 10, 2018</p>
      <p class="event-time"><i class="fas fa-clock"></i> 11:00am</p>
      <p class="event-location"><i class="fa fa-map-marker"></i> Online</p>
    </div>

  </li>
  <li class="list-group-item">

    <div class="event-details">
      <h3 class="event-title">Early Registration Ends</h3>
      <p class="event-date"><i class="fas fa-calendar-alt"></i> February 5, 2019</p>
      <p class="event-time"><i class="fas fa-clock"></i> 11:59pm</p>      
      <p class="event-location"><i class="fa fa-map-marker"></i> Online</p>
    </div>

  </li>
  <li class="list-group-item">

    <div class="event-details">
      <h3 class="event-title">Representatives' Dinner</h3>
      <p class="event-date"><i class="fas fa-calendar-alt"></i> March 5, 2019</p>
      <p class="event-time"><i class="fas fa-clock"></i> 5:00pm - 6:00pm</p>
      <p class="event-location"><i class="fa fa-map-marker"></i> Downtown Chattanooga</p>
    </div>

  </li>
  <li class="list-group-item">

    <div class="event-details">
      <h3 class="event-title">College Fair</h3>
      <p class="event-date"><i class="fas fa-calendar-alt"></i> March 5, 2019</p>
      <p class="event-time"><i class="fas fa-clock"></i> 6:30pm - 8:30pm</p>
      <p class="event-location"><i class="fa fa-map-marker"></i> Convention Center</p>
    </div>

  </li>
</ul>

</div><!-- /card -->

</div>
<div class="col-sm-6">

<div class="card" style="background:#f5f5f5; border-top:2px solid #00447C;border-radius:0; margin-top:15px;">
<div class="card-body">

<div class="row">
<div class="col-12">
<h2>Representative Finder</h2>
</div>
</div>

<div class="row">
<div class="col-12">

		    <div class="form-group">
		      <div class="input-group mb-3">
       		      <select class="form-control{{ $errors->first('representative') ? ' is-invalid' : '' }}" id="representative" name="representative">
		        <option></option>
			@foreach(\App\Models\Event::find(4)->participants->sortBy('owner.contact.defaultOrganization.name_alpha') as $participant)
		        <option value="{{ $participant->id }}"{{ (old('representative') == $participant->id) ? ' selected' : '' }}>{{ ($participant->owner->contact->defaultOrganization) ? $participant->owner->contact->defaultOrganization->name_display : 'N/A' }}</option>
			@endforeach
		      </select>
    <div class="input-group-append">
        <button class="btn btn-primary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
	  </div>
	  </div>

		      @if($errors->first('country'))
		      <small id="representativeHelp" class="form-text invalid-feedback">{{ $errors->first('representative') }}</small>
		      @endif
	            </div>

	  <a href="{{ url('/representatives/this-year') }}">View all representatives</a>
</div>
</div>

</div>
</div><!-- /card -->

<div class="card" style="background:#f5f5f5; border-top:2px solid #00447C;border-radius:0; margin-top:15px;">
<div class="card-body">

<div class="row">
<div class="col-12">
<h2>When & Where</h2>
</div>
</div>

<div class="row">
<div class="col-12">
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3266.5829779816577!2d-85.31486468475858!3d35.04216118034833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc5d1acbee121b58a!2sChattanooga+Convention+Center!5e0!3m2!1sen!2sus!4v1447863906109"  allowfullscreen=""></iframe>
</div>
</div>
</div>

<div class="row">
<div class="col-12">
<p style="margin-top:1rem; margin-bottom:0;">The Coast to Coast College Fair will be held at the Chattanooga Convention Center on Tuesday, March 5, 2019 from 6:30pm to 8:30pm.</p>
</div>
</div>

</div>
</div><!-- /card -->

</div>
<div class="col-sm-3">

<div class="card" style="background:#f5f5f5; border-top:2px solid #00447C;border-radius:0; margin-top:15px;">
<div class="card-body">

<div class="row">
<div class="col-12">
<h2>Testimonials</h2>
</div>
</div>

<div class="row">
<div class="col-12">
<blockquote class="blockquote">
  <p class="mb-0">"I believe it is important for students to expand their horizons, and the wide variety of colleges that attend the Coast-to –Coast fair allows them to consider schools they may not have thought about before. Perhaps they will discover that attending college in another part of the country will challenge them to learn and grow beyond their wildest dreams!"</p>
  <footer class="blockquote-footer">Susan McCarter, <cite title="Source Title">Girls Preparatory School</cite></footer>
</blockquote>
</div>
</div>

</div>
</div><!-- /card -->

</div>
</div>

</div>




<div class="container-fluid">

<div class="row">
<div class="col-4 col-sm-2 text-center">
<img class="img-fluid logo" src="{{ url('/img/1.jpg') }}" alt="" />
</div>
<div class="col-4 col-sm-2 text-center">
<img class="img-fluid logo" src="{{ url('/img/2.jpg') }}" alt="" />
</div>
<div class="col-4 col-sm-2 text-center">
<img class="img-fluid logo" src="{{ url('/img/3.jpg') }}" alt="" />
</div>
<div class="col-4 col-sm-2 text-center">
<img class="img-fluid logo" src="{{ url('/img/4.jpg') }}" alt="" />
</div>
<div class="col-4 col-sm-2 text-center">
<img class="img-fluid logo" src="{{ url('/img/5.jpg') }}" alt="" />
</div>
<div class="col-4 col-sm-2 text-center">
<img class="img-fluid logo" src="{{ url('/img/6.jpg') }}" alt="" />
</div>
</div>

</div>

@endsection