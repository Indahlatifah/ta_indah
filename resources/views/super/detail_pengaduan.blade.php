


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

  @include('sarpras.sarpraspartials.dbsarpras_notif')
  <!-- /.notif -->
  
  <!-- Sidebar Menu -->
  @include('sarpras.sarpraspartials.dbsarpras_sidebar')
  <!-- /.sidebar -->
  
  <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Detail Laporan</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
             <li class="breadcrumb-item active">Halaman Detail Laporan</li>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   
{{-- <form action="/upload/proses/{{ $laporan->id }}/update/akd" method="POST"> --}}
  <form action="/upload/proses/{{ $laporan->id }}/update/sarpras" method="POST">

 @csrf
 @method('PUT')
 <section class="content">
     <div class="container-fluid">
         <!-- Timeline example -->
         <div class="row">
             <div class="col-md-12">
                 <!-- The timeline -->
                 <div class="timeline">
                     <!-- Timeline items -->
                     <div class="time-label">
                 
                     </div>
                     <div>
                         <i class="fas fa-user bg-green"></i>
                         <div class="timeline-item">
                             <h3 class="timeline-header"><a href="#">Laporan Pengaduan</a></h3>
                             <div class="timeline-body">
                                 {{-- Tampilkan isi laporan berdasarkan ID pengguna di sini --}}
                                
                                 @if ($laporan)
                                 <p>Dibuat: {{ $laporan->created_at->format('l, d F Y - H:i:s') }}</p>
                                     <p>Bidang: 

                                     @if ($laporan->bidang == 0)
                                       Kemahasisaan
                                       @elseif ($laporan->bidang == 1)
                                       Akademik
                                       @elseif ($laporan->bidang == 2)
                                       Keamanan
                                       @elseif ($laporan->bidang == 3)
                                       Sarana Prasarana
                                       @elseif ($laporan->bidang == 4)
                                       Keuangan
                                       @elseif ($laporan->bidang == 5)
                                       Umum
                                       @endif

                                     </p>
                                     <p>Jenis: 
                                       @if ($laporan->jenis == 1)
                                       Pengaduan
                                       @else
                                       Aspirasi
                                       @endif  
                                     </p>
                                     <p>Isi Laporan: {{ $laporan->isi }}</p>

                                    
                                     @if ($laporan->image)
                                         <img src="{{ asset('image/' . $laporan->image) }}" style="width: 400px;"alt="Laporan Image">
                                     @else
                                         <p>Tidak ada gambar</p>
                                     @endif
                                 @else
                                     <p>Laporan tidak ditemukan.</p>
                                 @endif
                                    
                             </div>
                             <div class="form-floating">
                                 <label for="floatingTextarea2">Tanggapi</label>
                                 <textarea class="form-control" placeholder="Leave a comment here"
                                    name="tanggapan" id="floatingTextarea2" style="height: 100px"></textarea>
                             </div>
                             <div class="timeline-footer">
                               <div>
                                 <input type="radio" id="terima" name="status" value="diterima">
                                 <label for="terima" class="">Terima</label>
                             
                                 <input type="radio" id="tolak" name="status" value="ditolak">
                                 <label for="tolak" class="">Tolak</label>
                             </div>
                             <button type="submit" class="btn btn-success btn-sm">Kirim</button>
                             </div>
                         </div>
                     </div>

                     <!-- END timeline items -->
                 </div>
             </div>
         </div>
         <!-- /.row -->
     </div>
     <!-- /.container-fluid -->
 </section>
</form>

 <!-- /.content-wrapper -->
 
 <footer class="main-footer">
   <strong>&copy; 2023<a href="https://adminlte.io"> Created with love</a> by </strong> Indah Latifah
 </footer>
 
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
 