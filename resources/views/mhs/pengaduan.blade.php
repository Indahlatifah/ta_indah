<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mahasiswa</title>

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
 
    <!-- /.notif -->
    @include('mhs.mhspartials.dbmhs_notif')
    <!-- Content Wrapper. Contains page content -->  <!-- /.notif -->
  <!-- /.navbar -->
  @include('mhs.mhspartials.dbmhs_sidebar')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Halaman Pengaduan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   
     {{-- form --}}
<div id="features" class="tabs">
  <section id="form">  
      <div class="container">
        <div class="row text-center">
          <div class="col mb-4">
            <h2 class="fw-bold"> Form Laporan </h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <form action="/laporan/simpan/mhs" method="POST" enctype="multipart/form-data">
             @csrf
              <select name="bidang" class="form-select mb-4" aria-label="bidang">
                <option selected>Pilih bidang tujuan</option>
                <option value="0">Kemahasisaan</option>
                <option value="1">Akademik</option>
                <option value="2">Keamanan</option>
                <option value="3">Sarana Prasarana</option>
                <option value="4">Keuangan</option>
                <option value="5">umum</option>
              </select>
              <select name="jenis" class="form-select mb-4" aria-label="jenis_laporan">
                <option selected>Jenis Laporan</option>
                <option value="1">Pengaduan</option>
                <option value="2">Aspirasi</option>
              </select>
              <div class="form-group">
                <label >Pesan</label>
                <input name="isi" class="form-control" >
              </div>
              {{-- <div class="mb-4" >
                <label name="isi" for="pesan"  aria-label="isi" class="form-label">Tulis Pesan Anda Dibawah ini</label>
                <textarea class="form-control" id="isi" rows="3"></textarea>
              </div> --}}
                <div class="form-group">
                <label >Gambar</label>
                <input type="file" name="image" class="form-control" >
              </div>
              {{-- <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div></div> --}}
            
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
       </section>
  </div>
          {{-- akhir form --}}
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

 <!-- /.footer -->
@include('mhs.mhspartials.footer')
<!-- footer -->

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


