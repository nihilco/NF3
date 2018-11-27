<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/favicon.ico">

    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ url('/css/coasttocoast.css?t=' . time()) }}" />
    
    @include('partials.analytics')
  </head>

  <body>

<div id="app">
    
    <header>

      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md">
	<div class="container">
	  <a class="navbar-brand" href="/">
	    <img class="img-fluid" src="{{ url('/img/Logo2019.png') }}" alt="" />
	  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>      
            <li class="nav-item">
              <a class="nav-link" href="/representatives/this-year">Representatives</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sponsors">Sponsors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/faqs">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>      
          </ul>
          <ul class="navbar-nav">
            @guest
            <li class="nav-item">
              <a class="nav-link" href="/representatives/register">Register</a>
            </li>
            @else
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="#" id="authDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Uriah</a>

	      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="authDropdown">
		<a class="dropdown-item" href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="fas fa-sign-out-alt"></i> Logout</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		  {{ csrf_field() }}
		</form>
	      </div>
	    </li>
            @endguest
          </ul>
        </div>
      </div>
      </nav>
	  
    </header>

    <!-- Begin page content -->
    <main>
      @yield('content')
    </main>

    <footer class="footer" style="">
      <div class="container">
        <div class="row" >
          <div class="col-sm-3">

          </div>
          <div class="col-sm-3">
            <h4 class="footer-title">Menu</h4>
            <ul class="list-unstyled footer-list">
              <li><a href="/about">About</a></li>
	      <li><a href="/representatives">Representatives</a></li>
	      <li><a href="/sponsors">Sponsors</a></li>
	      <li><a href="/faqs">FAQs</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h4 class="footer-title">Our Sponsors</h4>
            <ul class="list-unstyled footer-list">
              <li><a href="https://www.baylorschool.org/" target="_blank">Baylor School</a></li>
              <li><a href="http://www.gps.edu/">Girls Preparatory School</a></li>
              <li><a href="http://www.mccallie.org/" target="_blank">McCallie School</a></li>
              <li><a href="http://www.sasweb.org/" target="_blank">St. Andrews-Sewanee School</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h4 class="footer-title">Contact Us</h4>
            <ul class="list-unstyled footer-list">
              <li>Coast-to-Coast College Fair<br />
		P.O. Box 4221<br />
	      Chattanooga, TN 37405</li>
              <li><a href="tel:+14235054036">(423) 505-4036</a></li>
              <li><a href="mailto:contact@coasttocoastcollegefair.com">contact@coasttocoastcollegefair.com</a></li>      
            </ul>
          </div>
        </div>
        <div class="row" style="padding-top:15px;">
          <div class="col-sm-6" id="copyright">
            <p>Copyright &copy; 2015-<?= date('Y') ?> Coast-to-Coast College Fair.  All rights reserved.</p>
          </div>
          <div class="col-sm-6" id="powered">
            <p>Powered by <a href="https://www.nihil.co" target="_blank">NIHIL</a></p>
          </div>
        </div>
      </div>
    </footer>

</div>
    
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
  <script src="{{ url('/js/app.js') }}"></script>
  <!-- Stripe -->
  <script src="https://js.stripe.com/v3/"></script>
  <script>
    // Create a Stripe client.
    var stripe = Stripe('pk_test_oBG1UuDfekCXu72oDEOjRcqk');
  </script>  
  <script src="{{ url('/js/stripe.js') }}"></script>
</body>
</html>
