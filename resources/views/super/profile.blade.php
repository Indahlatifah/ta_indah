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
      <!-- /.sidebar-menu -->

    <!-- /.sidebar -->
  </aside>


   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profil</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">

              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="{{ asset('template/dist/img/user4-128x128.jpg')}}"
                         alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center">{{ $user->name }}</h3>

                    <p class="text-muted text-center">
                        @php
                            $dtRole = DB::table('users')->where('id', Auth::user()->id ?? '')->select('users.*', 'id', 'type')->first();
                            // dd($dtRole->);
                        @endphp

                        {{-- {{ $dtRole->type }} --}}
                        @if ($dtRole->type==8)
                        Umum
                        @elseif ($dtRole->type==1)
                        Admin
                        @elseif ($dtRole->type==2)
                        Kemahasiswaan
                        @elseif ($dtRole->type==3)
                        Akademik
                        @elseif ($dtRole->type==4)
                        Kemanan
                        @elseif ($dtRole->type==5)
                        Sarana Pra Sarana
                        @elseif ($dtRole->type==6)
                        Direksi
                        @elseif ($dtRole->type==7)
                        Keuangan
                        @elseif ($dtRole->type==0)
                        Mahasiswa
                        @endif
                    </p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Nama</b> <a class="float-right">{{ $user->name }}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Username</b> <a class="float-right">{{ $user->email }}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Password</b> <a class="float-right">********</a>
                    </li>
                  </ul>

                  <a href="/superadmin/edit_profil/{{ $user->id }}" class="btn btn-primary btn-block"><b>Ubah</b></a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->


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


