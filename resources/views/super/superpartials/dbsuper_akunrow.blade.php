<!-- /.row -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h2 class="card-title mt-2">Daftar Akun</h2>
       <a button type="button" href="/kemahasiswaan/buatakun" class="btn btn-primary float-right ml-4"><i class="fas fa-plus"></i> Buat Akun</a></button></a>
        <div class="card-tools">
          <div class="input-group input-group-sm mt-1 mb-1" style="width: 250px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
              
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
        
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Level</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>@foreach($users as $user)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
            
              <td><span class="tag tag-success">  
               
                @if ($user->type==8)
                Umum
                @elseif ($user->type==1)
                Admin
                @elseif ($user->type==2)
                Kemahasiswaan
                @elseif ($user->type==3)
                Akademik
                @elseif ($user->type==4)
                Kemanan
                @elseif ($user->type==5)
                Sarana Pra Sarana
                @elseif ($user->type==6)
                Direksi
                @elseif ($user->type==7)
                Keuangan
                @else
              Mahasiswa
                @endif
              </span></td>
              <td>
                <a href="/superadmin/edit_account">Edit</a> |
                <a href="#">Delete</a>
              </td>
            </tr>
            @endforeach
           
            {{-- <tr>
              <td>2</td>
              <td>Alexander Pierce</td>
              <td>Akademik</td>
              <td><span class="tag tag-warning">Bidang</span></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Alexander Pierce</td>
              <td>Akademik</td>
              <td><span class="tag tag-warning">Bidang</span></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Alexander Pierce</td>
              <td>Akademik</td>
              <td><span class="tag tag-warning">Bidang</span></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Alexander Pierce</td>
              <td>Akademik</td>
              <td><span class="tag tag-warning">Bidang</span></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Alexander Pierce</td>
              <td>Akademik</td>
              <td><span class="tag tag-warning">Bidang</span></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>Alexander Pierce</td>
              <td>Akademik</td>
              <td><span class="tag tag-warning">Bidang</span></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>Alexander Pierce</td>
              <td>Akademik</td>
              <td><span class="tag tag-warning">Bidang</span></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>9</td>
              <td>Alexander Pierce</td>
              <td>Akademik</td>
              <td><span class="tag tag-warning">Bidang</span></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>10</td>
              <td>Alexander Pierce</td>
              <td>Akademik</td>
              <td><span class="tag tag-warning">Bidang</span></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
            </tr>
          </tbody> --}}
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<!-- /.row -->