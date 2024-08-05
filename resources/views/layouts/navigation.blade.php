<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button">
              <i class="fas fa-bars"></i>
          </a>
      </li>
      <li class="nav-item">
          <h2 class="navbar-title mb-0">Magang</h2>
      </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
          </a>
      </li>
      <li class="nav-item">
            @csrf
            <a class="nav-link" href="profile">
                <i class="fas fa-user"></i>
            </a>
    </li>
      <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-dark" onclick="return confirm('Apakah Anda yakin ingin logout?')">
                  <i class="fas fa-sign-out-alt"></i>
              </button>
          </form>
      </li>
  </ul>
</nav>
