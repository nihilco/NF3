<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/favicon.ico">

      <title>@yield('title') | {{ config('app.name') }}</title>

      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ url('/css/uclemmer.css?t=' . time()) }}" />
  </head>

  <body>

    <header>
      
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">uclemmer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>      
            <li class="nav-item">
              <a class="nav-link" href="/resume">Resume</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>      
          </ul>
          <ul class="navbar-nav">
            @guest
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/signup">Signup</a>
            </li>
            @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-bell"></i>
	      </a>
	      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	        <a class="dropdown-item" href="#">
	          <div class="d-flex w-100 justify-content-between">
	            <h5 class="mb-1">List group item heading</h5>
	            <small>3 days ago</small>
	          </div>
	          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
	          <small>Donec id elit non mi porta.</small>
	        </a>
	        <a class="dropdown-item" href="#">
	          <div class="d-flex w-100 justify-content-between">
	            <h5 class="mb-1">List group item heading</h5>
	            <small>3 days ago</small>
	          </div>
	          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
	          <small>Donec id elit non mi porta.</small>
	        </a>
	        <a class="dropdown-item" href="#">
	          <div class="d-flex w-100 justify-content-between">
	            <h5 class="mb-1">List group item heading</h5>
	            <small>3 days ago</small>
	          </div>
	          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
	          <small>Donec id elit non mi porta.</small>
	        </a>
	        <a class="dropdown-item" href="#">
	          <div class="d-flex w-100 justify-content-between">
	            <h5 class="mb-1">List group item heading</h5>
	            <small>3 days ago</small>
	          </div>
	          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
	          <small>Donec id elit non mi porta.</small>
	        </a>
	        <a class="dropdown-item" href="#">
	          <div class="d-flex w-100 justify-content-between">
	            <h5 class="mb-1">List group item heading</h5>
	            <small>3 days ago</small>
	          </div>
	          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
	          <small>Donec id elit non mi porta.</small>
	        </a>
	      </div>
	    </li>
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="#" id="authDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        {{ auth()->user()->email }}
	      </a>
	      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="authDropdown">
	        <a class="dropdown-item" href="{{ url('/settings') }}"><i class="fas fa-gear"></i> Settings</a>
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

      <div class="container">
        <div class="nav-scroller py-1 mb-2">
  	  <nav class="nav d-flex justify-content-between">
	    <a class="p-2 text-muted" href="#">Books</a>
	    <a class="p-2 text-muted" href="#">Engineering</a>
	    <a class="p-2 text-muted" href="#">Technology</a>
	    <a class="p-2 text-muted" href="#">Design</a>
	    <a class="p-2 text-muted" href="#">Software</a>
	    <a class="p-2 text-muted" href="#">Business</a>
	    <a class="p-2 text-muted" href="#">Politics</a>
	    <a class="p-2 text-muted" href="#">Opinion</a>
	    <a class="p-2 text-muted" href="#">Science</a>
	    <a class="p-2 text-muted" href="#">Health</a>
	    <a class="p-2 text-muted" href="#">Food</a>
	    <a class="p-2 text-muted" href="#">Travel</a>
	  </nav>
        </div>
      </div>
      
    </header>

    <!-- Begin page content -->
    <main role="main" style="">
      @yield('content')
    </main>

    <footer class="footer">
      <div class="container">
        <div class="row" style="padding-top:25px;">
          <div class="col-sm-6">
            <p>Copyright &copy; 2002-<?= date('Y') ?> by Uriah M. Clemmer IV.  All rights reserved.</p>
          </div>
          <div class="col-sm-6 text-right">
            <p>Powered by <a href="https://www.nihil.co" target="_blank">NIHIL</a></p>
          </div>
        </div>
      </div>
    </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
  <script src="{{ url('/js/app.js') }}"></script>-
</body>
</html>
