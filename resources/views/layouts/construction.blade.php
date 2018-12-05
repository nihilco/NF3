<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The NIHIL Corporation.">
    <meta name="author" content="Uriah M. Clemmer IV">
    <link rel="icon" href="/favicons/favicon.ico">

    <title>Under Construction | {{ config('app.name') }}</title>

    @include('partials.analytics')
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ url('/css/app.css?t=' . time()) }}" />
    
    <!-- Custom styles for this template -->
    <style>
      /*
       * Globals
       */

      /* Links */
      a,
      a:focus,
      a:hover {
        color: #fff;
      }

      /* Custom default button */
      .btn-secondary,
      .btn-secondary:hover,
      .btn-secondary:focus {
        color: #333;
        text-shadow: none; /* Prevent inheritance from `body` */
        background-color: #fff;
        border: .05rem solid #fff;
      }

      /*
       * Base structure
       */
      html,
      body {
        height: 100%;
        background-color: #333;
      }

      body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-pack: center;
        -webkit-box-pack: center;
        justify-content: center;
        color: #fff;
        text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
        box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
      }

      .cover-container {
        max-width: 42em;
      }

      /*
       * Header
       */
      .masthead {
        margin-bottom: 2rem;
      }

      .masthead-brand {
        margin-bottom: 0;
      }

      .nav-masthead .nav-link {
        padding: .25rem 0;
        font-weight: 700;
        color: rgba(255, 255, 255, .5);
        background-color: transparent;
        border-bottom: .25rem solid transparent;
      }

      .nav-masthead .nav-link:hover,
      .nav-masthead .nav-link:focus {
        border-bottom-color: rgba(255, 255, 255, .25);
      }

      .nav-masthead .nav-link + .nav-link {
        margin-left: 1rem;
      }

      .nav-masthead .active {
        color: #fff;
        border-bottom-color: #fff;
      }

      .cover-heading {
        text-transform: uppercase;
      }

      .lead {
        text-transform: uppercase;
      }

      @media (min-width: 48em) {

        .masthead-brand {
          float: left;
        }

        .nav-masthead {
          float: right;
        }

        .cover-heading {
          font-size: 4.5em;
        }
      }

      /*
       * Cover
       */
      .cover {
        padding: 0 1.5rem;
      }

      .cover .btn-lg {
        padding: .75rem 1.25rem;
        font-weight: 700;
      }

      /*
       * Footer
       */
      .mastfoot {
        color: rgba(255, 255, 255, .5);
      }

    </style>

    @include('partials.analytics')

  </head>

  <body class="text-center bg-dark">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

      <header class="masthead mb-auto">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:transparent!important;text-shadow:none;">
        <!--<a class="navbar-brand" href="/">NIHIL</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <!--<li class="nav-item">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#sideMenuSection" aria-expanded="false" aria-controls="sideMenuSection"><i class="fas fa-bars"></i></button>
            </li>-->
          </ul>
	  <ul class="navbar-nav">
	    @guest
	    <li class="nav-item">
	      <a class="nav-link" href="{{ route('login') }}">Login</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="{{ route('signup') }}">Signup</a>
	    </li>
	    @else
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        <i class="fas fa-server text-success"></i>
	      </a>
	      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	        <a class="dropdown-item" href="#">Action</a>
	        <a class="dropdown-item" href="#">Another action</a>
	        <div class="dropdown-divider"></div>
	        <a class="dropdown-item" href="#">Something else here</a>
	      </div>
	    </li>
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        <i class="far fa-bell"></i>
	      </a>
	      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	        <a class="dropdown-item" href="#">Action</a>
	        <a class="dropdown-item" href="#">Another action</a>
	        <div class="dropdown-divider"></div>
	        <a class="dropdown-item" href="#">Something else here</a>
	      </div>
	    </li>
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        {{ auth()->user()->email }}
	      </a>
	      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	        <a class="dropdown-item" href="{{ url('/settings') }}">Settings</a>
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
      </nav>
      </header>
      
        <main role="main" class="inner cover">
	  <h1 class="cover-heading">Under Construction</h1>
	  <p class="lead">This website will be up and running soon.</p>
	  <div class="progress mb-3 active">
	    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
	  </div>
	</main>

        <footer class="mastfoot mt-auto">
          <div class="inner">
	    <p>Powered by <a href="https://www.nihil.co" target="_blank">NIHIL</a></p>
	  </div>
	</footer>

      </div>

      <!-- Bootstrap core JavaScript -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   </body>
   
 </html>
