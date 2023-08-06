
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
            <h1 class="m-0">Admin Control</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Account</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->


                <form action="/superadmin/edit_account" method="post">
                  @csrf
                  @method('PUT')
                  <?php $i = 1; ?> @foreach($users as $user)
                    <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama</label>
                          <input type="email" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" placeholder="Nama">
                        </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" value="{{$user->email}}" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      {{-- <div class="form-group">
                        <label for="exampleInputPassword1">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div> --}}
                     <!-- /.form-group -->
                <div class="form-group">
                    <label>Level</label>
                    <select class="form-control select2" name="type"  style="width: 100%;">
                      <option selected="{{$user->type}}">Level</option>
                      <option value="1">Admin</option>
                      <option value="0">Mahasiswa</option>
                      <option value="4">Keamanan</option>
                      <option value="3">Akademik</option>
                      <option value="7">Keuangan</option>
                      <option value="5">Sarana Prasana</option>
                      <option value="2">Kemahasiswaan</option>
                      <option value="8">Umum</option>
                      <option value="6">Direksi</option>
                      {{-- /* Users: 0=>Mahasiswa, 1=>SuperAdmin, 2=>Kemahasiswaan, 3=>Akademik ,4=>Kamsisdal, 5=>Sarpras, 6=>Direksi, 7=>Keuangan, 8=>umum, */ --}}
                    </select>
                  </div>
                  <!-- /.form-group -->
                      
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      @endforeach
                    </div>
                  </form>
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


