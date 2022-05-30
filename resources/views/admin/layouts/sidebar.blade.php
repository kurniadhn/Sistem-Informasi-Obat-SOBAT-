
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="{{ asset('backend/pages/dashboards/dashboard.html') }}">
          <img src="{{ asset('backend/assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <h6 class="navbar-heading p-0 text-muted">Menu</h6>
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.dashboard') }}" role="button">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="ni ni-ambulance text-orange"></i>
                <span class="nav-link-text">Obat</span>
              </a>
              <div class="collapse" id="navbar-examples">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{ route('admin.obat') }}" class="nav-link">Daftar Obat</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('obat.create') }}" class="nav-link">Tambah Obat</a>
                  </li>
                  <li class="nav-item">
                    <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">Jenis Obat</a>
                    <div class="collapse show" id="navbar-multilevel">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="{{ route('admin.jenisObat') }}" class="nav-link ">Daftar Jenis Obat</a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('jenisObat.create') }}" class="nav-link ">Tambah Jenis Obat</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                <i class="ni ni-ruler-pencil text-info"></i>
                <span class="nav-link-text">Artikel</span>
              </a>
              <div class="collapse" id="navbar-components">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{ route('admin.artikel') }}" class="nav-link">Daftar Artikel</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('artikel.create') }}" class="nav-link">Tambah Artikel</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>