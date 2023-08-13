<!-- /.row -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h2 class="card-title mt-2">Daftar Akun</h2>
       <a button type="button" href="/superadmin/buatakun" class="btn btn-primary float-right ml-4"><i class="fas fa-plus"></i> Buat Akun</a></button></a>
        <div class="card-tools">
          <div class="input-group input-group-sm mt-1 mb-1" style="width: 250px;">
            <form action="/superadmin/cari" method="GET" class="input-group">
                <input type="text" name="cari" class="form-control" value="{{ old('cari') }}" placeholder="Search">
                <div class="input-group-append">
                    <button type="submit" value="cari" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
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
                {{-- {{$user->type}} --}}
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
                @elseif ($user->type==0)
                Mahasiswa
                @endif
              </span></td>
              <td>
                <a href="/superadmin/edit_account/{{ $user->id }}" class="btn btn-xs btn-success">Edit</a> 
                @csrf
                @method('DELETE')
                <a href="/superadmin/delete/{{ $user->id }}" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');">Delete</a>
</td>
              </td>
            </tr>
            @endforeach
        </table>
        {{-- {{ $user->links() }} --}}
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<!-- /.row -->