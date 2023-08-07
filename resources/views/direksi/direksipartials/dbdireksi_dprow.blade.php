 
        <div class="card-body table-responsive p-0">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Pesan</th>
                <th>Gambar</th>
                <th>Bidang</th>
                <th>Jenis</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($laporan as $laporan)
              <tr>
               
                <td>{{$loop->iteration}}</td>
                <td>{{$laporan->isi}}</td>
                <td>{{$laporan->gambar}}</td>
                <td><span class="tag tag-success">  
                  {{-- {{$laporan->bidang}} --}}
                  @if ($laporan->bidang==0)
                  Kemahasisaan
                  @elseif ($laporan->bidang==1)
                  Akademik
                  @elseif ($laporan->bidang==2)
                  Keamanan
                  @elseif ($laporan->bidang==3)
                  Sarana Prasarana
                  @elseif ($laporan->bidang==4)
                  Keuangan
                   @elseif ($laporan->bidang==5)
                   umum
                  @endif
                </td>
                  
                </span>
                <td>
                  @if ($laporan->jenis==1)
                 Pengaduan
                @else
                  Aspirasi
                 @endif
            </td>
                <td>Diterima</td>
                <td>
                  <a href="/direksi/detail">Detail</a> 
                  
                </td>
          
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>