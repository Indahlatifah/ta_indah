
 
 
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('template')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">APP Pengaduan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('template')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/superadmin/profil" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/superadmin/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/superadmin/pengaduan" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Daftar Pengaduan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/laporan/create_laporan" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
               Laporan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/superadmin/admincontrol/listuser" class="nav-link ">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Daftar Akun
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/superadmin/buatakun" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Buat Akun
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/superadmin/profil" class="nav-link">
              <i class="nav-icon fa fa-address-card"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          {{-- @php
          $dtRole = DB::table('users')->where('id', Auth::user()->id ?? '')->select('users.*', 'id', 'type')->first();
          // dd($dtRole->);
      @endphp --}}
          {{-- <li class="nav-item">
            <a href="/superadmin/edit_profil/" class="nav-link">
              <i class="nav-icon fa fa-cogs" aria-hidden="true"></i>
              <p>
                Edit profil
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fa  fa-reply"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  