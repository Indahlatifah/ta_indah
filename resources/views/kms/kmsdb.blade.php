<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kemahasiswaan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
 

   <!-- Sidebar Menu -->
   @include('kms.kmspartials.dbkms_notif')
   <!-- /.sidebar -->

      <!-- Sidebar Menu -->
      @include('kms.kmspartials.dbkms_sidebar')
    <!-- /.sidebar -->
  </aside>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Dashboard Overview</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
 
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
          

<div class="card">
    <div class="card-header border-0">
        <h3 class="card-title">Data Laporan Masuk</h3>
        {{-- <div class="card-tools">
            <a href="#" class="btn btn-sm btn-tool">
                <i class="fas fa-download"></i>
            </a>
            <a href="#" class="btn btn-sm btn-tool">
                <i class="fas fa-bars"></i>
            </a>
        </div> --}}
    </div>
    <div class="card-body">
        <!-- Menggunakan data dari tabel "laporan" -->
        @php
        $jumlahDiterima = \App\Models\Laporan::where('status', 'diterima')->count();
        $jumlahDitolak = \App\Models\Laporan::where('status', 'ditolak')->count();
        $jumlahMenunggu = \App\Models\Laporan::whereNull('status')->count();
        @endphp

        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
            <p class="text-success text-xl">
                <i class="ion ion-ios-people-outline"></i>
            </p>
            <p class="d-flex flex-column text-right">
                <span class="font-weight-bold">
                    <i class="ion ion-android-arrow-up text-success"></i> {{$jumlahDiterima}}
                </span>
                <span class="text-muted">Laporan Diterima</span>
            </p>
        </div>
        <!-- /.d-flex -->
        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
            <p class="text-warning text-xl">
                <i class="ion ion-ios-refresh-empty"></i>
            </p>
            <p class="d-flex flex-column text-right">
                <span class="font-weight-bold">
                    <i class="ion ion-android-arrow-up text-warning"></i> {{$jumlahMenunggu}}
                </span>
                <span class="text-muted">Menunggu Konfirmasi</span>
            </p>
        </div>
        <!-- /.d-flex -->
        <div class="d-flex justify-content-between align-items-center mb-0">
            <p class="text-danger text-xl">
                <i class="ion ion-ios-people-outline"></i>
            </p>
            <p class="d-flex flex-column text-right">
                <span class="font-weight-bold">
                    <i class="ion ion-android-arrow-down text-danger"></i> {{$jumlahDitolak}}
                </span>
                <span class="text-muted"> Laporan Ditolak</span>
            </p>
        </div>
    </div>
</div>

  
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2023<a href="https://adminlte.io"> Created with love</a> by </strong> Indah Latifah
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- AdminLTE App -->
<script src="{{asset('template/dist/js/adminlte.min.js')}}"></script>
<!-- jQuery -->
<script src="{{asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset ('template/dist/js/pages/dashboard3.js')}}"></script>
</body>
</html>


