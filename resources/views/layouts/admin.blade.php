<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ url('/css/app.css?t=' . time()) }}" />
  </head>
  <body class="bg-dark">
  <div id="">

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
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
		@forelse($s = \App\Models\Server::all() as $server)
		<a class="dropdown-item" href="{{ $server->path() }}"><i class="fas fa-circle text-success"></i> {{ $server->name }} ({{$server->hostname}})</a>
		@empty
		<p>No servers.</p>
		@endforelse
		@if($s->count() > 0)
		<div class="dropdown-divider"></div>
	        <a class="dropdown-item" href="/servers">All Servers</a>
		@endif
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
	        <a class="dropdown-item" href="{{ route('profile') }}"><i class="fas fa-user"></i> Profile</a>
		<a class="dropdown-item" href="{{ url('/settings') }}"><i class="fas fa-cog"></i> Settings</a>
	        <div class="dropdown-divider"></div>
	        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="fas fa-sign-out-alt"></i> Logout</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		  {{ csrf_field() }}
		  </form>
	      </div>
            </li>
            <!--<li class="nav-item">
	      <button class="btn btn-link nav-link" type="button" data-toggle="collapse" data-target="#userMenuSection" aria-expanded="false" aria-controls="userMenuSection"><i class="fas fa-bars"></i></button>
            </li>-->
	    @endguest
          </ul>
        </div>
      </nav>
    </header>

    <div id="mainContentDiv">
      
      <!--<section id="sideMenuSection" class="bg-dark collapse show">
	
	<nav id="sideMenu" class="list-group">
	  <a href="{{ url('/dashboard') }}" class="list-group-item list-group-item-action active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
	  <a href="{{ url('/content') }}" class="list-group-item list-group-item-action"><i class="far fa-file-alt"></i> Content</a>
	  <a href="{{ url('/media') }}" class="list-group-item list-group-item-action"><i class="fas fa-desktop"></i> Media</a>
	  <a href="{{ url('/store') }}" class="list-group-item list-group-item-action"><i class="fas fa-store"></i> Store</a>
	  <a href="{{ url('/library') }}" class="list-group-item list-group-item-action"><i class="fas fa-book"></i> Library</a>	  
	  <a href="{{ url('/forums') }}" class="list-group-item list-group-item-action"><i class="fas fa-th-list"></i> Forums</a>
	  <a href="{{ url('/support') }}" class="list-group-item list-group-item-action"><i class="fas fa-bug"></i> Support</a>
	  <a href="{{ url('/system') }}" class="list-group-item list-group-item-action"><i class="fas fa-server"></i> System</a>
	  <a href="{{ url('/settings') }}" class="list-group-item list-group-item-action"><i class="fas fa-cogs"></i> Settings</a>
	</nav>

      </section>-->
      
      <main id="mainContent" role="main" class="">

	<div id="stickyFooterSpacer">

          {{ Breadcrumbs::render() }}
	  
	  <div class="container-fluid">

	    @if(Session::has('message'))
	    <div class="row">
	      <div class="col">

		<div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">
		  <strong>
		    @php
		    if(Session::get('alert-class') == 'alert-success') {
		      echo "<i class='fas fa-check'></i> Success: ";
		    } elseif (Session::get('alert-class') == 'alert-warning') {
		      echo '<i class="fas fa-exclamation-triangle"></i> Warning: ';
    		    } elseif (Session::get('alert-class') == 'alert-danger') {
		      echo '<i class="fas fa-exclamation-triangle"></i> Danger: ';
		    } else {
		      echo '<i class="fas fa-info-circle"></i> Info: ';
		    }
		    @endphp
		  </strong> {{ Session::get('message') }}
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
 	        </div>
		
   	      </div>
	    </div>
	    @endif
	    
	    <div class="row">
	      <div class="col">

	        @yield('content')

	      </div>
	    </div>
	  </div>

	</div><!-- /#stickyFooterSpacer -->

	<footer id="mainContentFooter" class="container-fluid">
	  <div class="row">
	    <div class="col-md-9 col-sm-8" id="copyright">
	      <p class="pt-3 pb-3 m-0">Copyright &copy; 2009-<?= date('Y') ?> The NIHIL Corporation.  All rights reserved.</p>
	    </div>
	    <div class="col-md-3 col-sm-4" id="powered">
	      <p class="pt-3 pb-3 m-0">Powered by <a href="https://www.nihil.co" target="_blank">NIHIL</a></p>
	    </div>
	  </div>
	</footer>
	
      </main>
      
      <section id="userMenuSection" class="bg-dark collapse">

	<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="preferences-tab" data-toggle="tab" href="#preferences" role="tab" aria-controls="preferences" aria-selected="true"><i class="fas fa-list"></i></a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="chat-tab" data-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="far fa-comment-dots"></i></a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="status-tab" data-toggle="tab" href="#status" role="tab" aria-controls="status" aria-selected="false"><i class="fas fa-cog"></i></a>
	  </li>
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="preferences" role="tabpanel" aria-labelledby="preferences-tab">
	    <div class="container">

	      <h5>Preferences</h5>
	      
	    </div>
	  </div>
	  <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chat-tab">
	    <div class="container">

	      <h5>Chat</h5>
	      
	    </div>
	  </div>
	  <div class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="status-tab">
	    <div class="container">

	      <h5>System Status</h5>

	      <h6>Current Server</h6>
	      <small>jupiter.nihil.co</small>
	      
	      <h6>CPU Usage</h6>
	      
	      <div class="progress progress5">
		<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
	      </div>

	      <small>348 Processes. 1/4 Cores.</small>

	      <h6>Memory Usage</h6>

	      <div class="progress progress5">
		<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
	      </div>
		      
	      <small>11444GB/16384MB</small>
	      
	    </div>
	  </div>
	</div>
		
      </section>
      
    </div>
  </div>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>-->
  <script src="https://js.stripe.com/v3/"></script>
  <script src="{{ url('/js/app.js') }}"></script>-
  </body>
</html>
