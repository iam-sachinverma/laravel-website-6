<nav id="sidebar" class="sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="{{ url('admin/dashboard') }}">
      <span class="align-middle">MS Service Center</span>
    </a>

    <ul class="sidebar-nav">

      <li class="sidebar-header">
        Pages
      </li>

      <li class="sidebar-item">
        @if(Session::get('page')=="dashboard")
            <?php $active = "active"; ?>
          @else
            <?php $active = ""; ?>
        @endif 
        <a class="sidebar-link" href="{{ url('admin/dashboard') }}" class="sidebar-link {{ $active }}">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li>

      <!-- Settings -->
      @if(Session::get('page')=="settings" || Session::get('page')=="update-admin-details")
            <?php $active = "active"; ?>
          @else
            <?php $active = ""; ?>
      @endif  

      <li class="sidebar-item">
        <a href="#auth" data-bs-toggle="collapse" class="sidebar-link {{ $active }}">
          <i class="align-middle" data-feather="users"></i> <span class="align-middle">Settings</span>
        </a>
        <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
          @if(Session::get('page')=="settings")
          <?php $active = "active"; ?>
            @else
          <?php $active = ""; ?>
          @endif
          <li class="sidebar-item"><a class="sidebar-link {{ $active }}" href="{{ url('admin/settings') }}">Update Admin Password</a></li>
          @if(Session::get('page')=="update-admin-details")
            <?php $active = "active"; ?>
           @else
            <?php $active = ""; ?>
          @endif
          <li class="sidebar-item"><a class="sidebar-link {{ $active }}" href="{{ url('admin/update-admin-details') }}">Update Admin Details</a></li>
        </ul>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ url('admin/querys') }}" class="sidebar-link {{ $active }}">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Query</span>
        </a>
      </li>

    </ul>
  </div>
</nav>