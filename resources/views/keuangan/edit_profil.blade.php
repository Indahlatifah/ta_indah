
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Keuangan</title>

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
 @include('keuangan.keuanganpartials.dbkeuangan_notif')
 <!-- /.notif -->

  <!-- Sidebar Menu -->
  @include('keuangan.keuanganpartials.dbkeuangan_sidebar')
  <!-- /.sidebar -->


  </aside>

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Profil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
      
              <li class="breadcrumb-item active">Ubah Profil</li>
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
                                   src="{{ asset('image/ava.png')}}"
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

                  <form action="/keuangan/edit_profil/{{ $user->id }}/update" method="POST">
                    @csrf
                    @method('PUT')

                  <div class="card-body">
                    <div class="form-group">

                     
                      <label for="name">Nama</label>
                      <input type="name" value="{{$user->name}}" class="form-control" name="name" id="name" placeholder="Name">
                    </div>
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input type="email" value="{{$user->email}}" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  </div>

                  <button type="submit" class="btn btn-primary">Ubah</button>
                  {{-- <a href="/superadmin/edit_profil/" class="btn btn-primary btn-block"><b>Ubah</b></a> --}}

                </div>

                  </form>

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
@include('keuangan.keuanganpartials.footer')
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


