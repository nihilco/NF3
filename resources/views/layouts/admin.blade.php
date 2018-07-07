<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin | The NIHIL Corporation</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  </head>
  <body class="bg-dark">

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">NF3</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <!--<li class="nav-item">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#sideMenu" aria-expanded="false" aria-controls="sideMenu"><i class="fas fa-bars"></i></button>
            </li>-->
          </ul>
	  <ul class="navbar-nav">
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        <i class="fas fa-server"></i>
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
	        <i class="far fa-envelope-open"></i>
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
	        uclemmer
	      </a>
	      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	        <a class="dropdown-item" href="#">Settings</a>
	        <div class="dropdown-divider"></div>
	        <a class="dropdown-item" href="#">Logout</a>
	      </div>
            </li>
            <li class="nav-item">
	      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#userMenu" aria-expanded="false" aria-controls="userMenu"><i class="fas fa-bars"></i></button>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div style="margin-top:57px;">
      
      <section id="sideMenu" class="bg-dark collapse show" style="position: fixed;z-index: 5;width: 200px;height: calc(100vh - 57px);">
	
	<nav class="list-group">
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
	
      </section>
      
      <main role="main" class="" style="background:#e4e5e6;margin-left:200px;margin-right:200px; height: calc(100vh - 57px)">

	<div class="row">
	  <div class="col">

	    {{ Breadcrumbs::render() }}

	  </div>
	</div>

	<div class="container">
	  <div class="row">
	    <div class="col">

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title">Card title</h5>
		  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
		</div>
		<div class="card-body">
		  <h5 class="card-title">Special title treatment</h5>
		  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		  <a href="#" class="btn btn-primary mb-3">Go somewhere</a>
		  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  <a href="#" class="card-link">Card link</a>
		  <a href="#" class="card-link">Another link</a>
		</div>
		<div class="card-footer text-muted">
		  2 days ago
		</div>
	      </div>
	      
	    </div>
	  </div>
	</div>

	<footer style="background:#FFFFFF;margin-top:1em">
	  <div class="row">
	    <div class="col-md-9 col-sm-8">
	      <p class="p-3 m-0">Copyright &copy; 2009-<?= date('Y') ?> The NIHIL Corporation.  All rights reserved.</p>
	    </div>
	    <div class="col-md-3 col-sm-4 text-right">
	      <p class="p-3 m-0">Powered by <a href="https://www.nihil.co" target="_blank">NIHIL</a></p>
	    </div>
	  </div>
	</footer>
	
      </main>
      
      <section id="userMenu" class="bg-dark collapse show" style="position: fixed; top:57px; right:0; z-index: 5; width:200px; height: calc(100vh - 57px)">

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
	      
	      <div class="progress" style="height: 5px;">
		<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
	      </div>

	      <small>348 Processes. 1/4 Cores.</small>

	      <h6>Memory Usage</h6>

	      <div class="progress" style="height: 5px;">
		<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
	      </div>
		      
	      <small>11444GB/16384MB</small>
	      
	    </div>
	  </div>
	</div>
		
      </section>
      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
