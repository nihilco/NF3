<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/favicon.ico">

    <title>@yield('title') | {{ config('app.name') }}</title>
<<<<<<< HEAD

    @include('partials.analytics')    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
=======
>>>>>>> development

    @include('partials.analytics')
      
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ url('/css/app.css?t=' . time()) }}" />
<<<<<<< HEAD

=======
    
>>>>>>> development
  </head>

  <body>

    <header>
      
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">NIHIL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>      
            <li class="nav-item">
              <a class="nav-link" href="/features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pricing">Pricing</a>
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
																																																																																												           Uriah
																																																																																													             </a>
																																																																																														               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="authDropdown">
																																																																																															       	            <a class="dropdown-item" href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
																																																																																																	               <a class="dropdown-item" href="/profile"><i class="fas fa-user"></i> Profile</a>
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
    <main role="main" style="padding-top:51px;">
      @yield('content')
    </main>

    <footer class="footer">
      <div class="container">
        <div class="row" >
          <div class="col-sm-3">
            <div class="row">
              <div class="col-sm-12">
                NIHIL
              </div>
            </div>
          </div>
          <div class="col-sm-9">
            <div class="row" style="padding-bottom:25px;">
              <div class="col-sm-12">
                <h3>Let nothing stand in the way</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <h4>Navigate</h4>
                <ul class="list-unstyled">
                  <li><a href="/site-map">Site Map</a></li>
                  <li><a href="/legal/privacy">Privacy</a></li>
                  <li><a href="/legal/terms">Terms</a></li>
                  <li><a href="/contact">Contact</a></li>
                </ul>
              </div>
              <div class="col-sm-3">
                <h4>Links</h4>
                <ul class="list-unstyled">
                  <li><a href="#">Link Somewhere</a></li>
                  <li><a href="#">Link Somewhere</a></li>
                  <li><a href="#">Link Somewhere</a></li>
                  <li><a href="#">Link Somewhere</a></li>
                </ul>
              </div>
              <div class="col-sm-3">
                <h4>Support</h4>
                <ul class="list-unstyled">
                  <li><a href="/faqs">FAQs</a></li>
                  <li><a href="/forums">Forums</a></li>
                  <li><a href="/tickets">Tickets</a></li>
                  <li><a href="/tutorials">Tutorials</a></li>      
                </ul>
              </div>
              <div class="col-sm-3">
                <h4>Company</h4>
                <ul class="list-unstyled">
                  <li><a href="/portfolio">Portfolio</a></li>
                  <li><a href="/history">History</a></li>
                  <li><a href="/team">Team</a></li>
                  <li><a href="/jobs">Jobs</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="padding-top:25px;">
          <div class="col-sm-6">
      <p>Copyright &copy; 2009-<?= date('Y') ?> The NIHIL Corporation.  All rights reserved.</p>
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
  <script src="{{ url('/js/app.js') }}"></script>
</body>
</html>
