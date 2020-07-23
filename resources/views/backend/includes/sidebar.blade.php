<aside class="main-sidebar sidebar-light-yellow  elevation-1">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('/') }}/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('/') }}/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Abd. Asis</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-flat nav-legacy nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treevie">
            <a href="{{ route('index') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ Request::is('admin/katalog*') ? 'menu-open' : "" }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Katalog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('katalog.index') }}" class="nav-link {{ Request::is('admin/katalog') ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Informasi</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link {{ Request::is('admin/category') ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::is('admin/loker*') ? 'menu-open' : "" }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Loker
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('loker.create') }}" class="nav-link {{ Request::is('admin/loker') ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Tambah Loker</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('loker.index') }}" class="nav-link {{ Request::is('admin/loker') ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Daftar Loker</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope-open"></i>
              <p>
                Pemasaran
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Surat</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::is('admin/partner-perusahaan*') ? 'menu-open' : "" }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Data Partner
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('partner-perusahaan.create') }}" class="nav-link {{ Request::is('admin/partner-perusahaan') ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Tambah Partner</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('partner-perusahaan.index') }}" class="nav-link {{ Request::is('admin/partner-perusahaan') ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Daftar Partner</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::is('admin/slider*') ? 'menu-open' : "" }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Data Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('slider.create') }}" class="nav-link {{ Request::is('admin/slider') ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Tambah Slider</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('slider.index') }}" class="nav-link {{ Request::is('admin/slider') ? 'active' : '' }}">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Daftar Slider</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Sistem
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Pengaturan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Pengguna</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-clipboard"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
