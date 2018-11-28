<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') | {{ config('app.name') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  
  <script>
    window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token(),
    'user' => auth()->user()->slug
    ]) !!};
  </script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}?t={{ time() }}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

<div id="app" class="app">
  
    <!-- Header Here -->
    @include('layouts.header')
  
    <div class="app-body">

      <!-- Sidebar Here -->
      @include('layouts.sidebar')

      <main class="main">

        <!-- Breadcrumb Here-->
        {{ Breadcrumbs::render() }}
	
        <div class="container-fluid">
	  <div class="animated fadeIn">

	    <!-- Content Here -->
	    @yield('content')

	  </div>
        </div>

	@if(\Session::has('message'))
	<!-- Alerts Here -->
	<div class="alert-box">
	  <div class="alert {{ \Session::get('alert-class', 'alert-info') }} fade show" role="alert">
	    <strong>
	    @php
	      if(\Session::get('alert-class') == 'alert-success') {
	        echo "<i class='fas fa-check'></i> Success: ";
	      } elseif (\Session::get('alert-class') == 'alert-warning') {
	        echo '<i class="fas fa-exclamation-triangle"></i> Warning: ';
	      } elseif (\Session::get('alert-class') == 'alert-danger') {
	        echo '<i class="fas fa-exclamation-triangle"></i> Danger: ';
	      } else {
	        echo '<i class="fas fa-info-circle"></i> Info: ';
	      }
	    @endphp
  	    </strong> {{ \Session::get('message') }}
	  </div>
	</div>
	@endif
	
      </main>

      <!-- Aside Here -->
      @include('layouts.aside')

    </div>

    <!-- Footer Here-->
    @include('layouts.footer')

</div>
    
    <!-- Scripts -->
    <script src="https://js.stripe.com/v3/"></script>
    
</body>
</html>
