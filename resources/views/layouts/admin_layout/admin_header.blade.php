<nav class="navbar navbar-expand navbar-light navbar-bg">
  <a class="sidebar-toggle d-flex">
    <i class="hamburger align-self-center"></i>
  </a>

  <form class="d-none d-sm-inline-block">
    <div class="input-group input-group-navbar">
      <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
      <button class="btn" type="button">
        <i class="align-middle" data-feather="search"></i>
      </button>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav ms-auto">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/logout') }}">
        Logout
      </a>
    </li>
  </ul>
</nav>