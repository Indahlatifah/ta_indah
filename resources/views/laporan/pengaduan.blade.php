<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

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

 <!-- notif -->
 @include('super.superpartials.dbsuper_notif')
 <!-- /.notif -->


     <!-- Sidebar Menu -->
     @include('super.superpartials.dbsuper_sidebar')
     <!-- /.sidebar -->
  </aside>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Halaman Pengaduan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <a href="/laporan/create_laporan" class="btn btn-success"> Tambah Data</a>
        <!-- tabel pengaduan -->
   
        <div class="card-body table-responsive p-0">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Username</th>
                <th>Pesan</th>
                <th>Bidang</th>
                <th>Jenis</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Indah Latifah</td>
                <td>Lorem ipsum dolor, sit amet consectetur </td>
                <td>Keuangan</td>
                <td>Pengaduan</span></td>
                <td>Diterima</>
                <td>
                  <a href="/kemahasiswaan/detail">Detail</a> 
                  
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Anoniem</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                <td>Keuangan</td>
                <td>Aspirasi</span></td>
                <td>Ditolak</th>
                <td>
                    <a href="/kemahasiswaan/detail">Detail</a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Alexander Pierce</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                <td>Keuangan</td>
                <td><span class="tag tag-warning">Pengaduan</span></td>
                <td></td>
                <td>
                    <a href="/kemahasiswaan/detail">Detail</a>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Alexander Pierce</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                <td>Keuangan</td>
                <td><span class="tag tag-warning">Pengaduan</span></td>
                <td></td>
                <td>
                    <a href="/kemahasiswaan/detail">Detail</a>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Alexander Pierce</td>
                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                <td>Keuangan</td>
                <td><span class="tag tag-warning">Pengaduan</span></td>
                <td></td>
                <td>
                    <a href="/kemahasiswaan/detail">Detail</a>
                </td>
              </tr>
             
            </tbody>
          </table>
        </div>
        <!-- /.tabel pengaduan -->
    
       

    
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <!-- footer -->
    @include('super.superpartials.footer')
    <!-- /.footer -->
 </aside>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/dist/js/adminlte.min.js')}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset ('template/dist/js/pages/dashboard3.js')}}"></script>
</body>
</html>


