<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">

      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <i class="nav-icon icon-speedometer"></i> Dashboard
        </a>
      </li>

      @can('index', \App\Models\Contact::class)
      <li class="nav-item">
        <a class="nav-link" href="/clients">
          <i class="nav-icon icon-people"></i> Clients
        </a>
      </li>
      @endcan

      @can('index', \App\Models\Issue::class)
      <li class="nav-item">
        <a class="nav-link" href="/cases">
          <i class="nav-icon icon-briefcase"></i> Cases
        </a>
      </li>
      @endcan

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