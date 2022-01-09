    <ul class="navbar-nav sidebar sidebar-primary accordion" id="accordionSidebar">
      <a class="sidebar-brand bg-light d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon">
          <img src="{{ asset('images/brand2.png') }}" >
        </div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('home') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('yahyaurl.create') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Create URL</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('yahyaurl.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>URLs</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="version">Version 1.0</div>
    </ul>
