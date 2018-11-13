<header class="app-header">
  <nav class="navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">
      <img class="navbar-brand-full" src="img/brand/wordmark.svg" width="89" height="25" alt="Wordmark">
      <img class="navbar-brand-minimized" src="img/brand/logo.svg" width="30" height="30" alt="Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">

    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#">
          <i class="icon-plus"></i>
        </a>
      </li>
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#">
          <i class="icon-bell"></i>
          <span class="badge badge-pill badge-danger">5</span>
        </a>
      </li>
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#">
          <i class="icon-list"></i>
        </a>
      </li>
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#">
          <i class="icon-location-pin"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img class="img-avatar" src="{{ url('img/avatars/' . auth()->id() . '/avatar.png') }}" alt="avatar">
          {{ auth()->user()->email }}
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="/profile">
            <i class="fa fa-user"></i> Profile
          </a>
          <a class="dropdown-item" href="/profile/settings">
            <i class="fa fa-wrench"></i> Settings
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/lock-account">
            <i class="fa fa-lock"></i> Lock Account
          </a>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
	  </a>
	  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	    @csrf
	  </form>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</header>