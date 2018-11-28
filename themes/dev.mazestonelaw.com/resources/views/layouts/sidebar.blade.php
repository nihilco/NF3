<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">

      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <i class="nav-icon icon-speedometer"></i> Dashboard
        </a>
      </li>

      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
          <i class="nav-icon icon-briefcase"></i> Cases
        </a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" href="/cases?active=true">
              <i class="nav-icon icon-briefcase"></i> Active
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cases?closed=true">
              <i class="nav-icon icon-briefcase"></i> Closed
            </a>
          </li>
        </ul>
      </li>

      @can('index', \App\Models\Issue::class)
      <li class="nav-item">
        <a class="nav-link" href="/contact/list">
          <i class="nav-icon icon-envelope"></i> Contact Messages
        </a>
      </li>
      @endcan

    </ul>
  </nav>
  <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>