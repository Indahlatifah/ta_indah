 
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
                <?php $i = 1; ?>@foreach($laporan as $laporan)
                <tr>
                 
                  <td>{{$loop->iteration}}</td>
                  <td>{{$laporan->isi}}</td>
                  <td>{{$laporan->gambar}}</td>
                  <td><span class="tag tag-success">  
                    @if ($laporan->bidang==0)
                    Umum
                    @elseif ($laporan->bidang==1)
                    Kemahasiswaan
                    @elseif ($laporan->bidang==2)
                    Akademik
                    @elseif ($laporan->bidang==3)
                    Kemanan
                    @elseif ($laporan->bidang==4)
                    Sarana Pra Sarana
                     @else
                    Keuangan
                  
                    @endif</td>
                    
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
                    <a href="/kemahasiswaan/detail">Detail</a> 
                    
                  </td>
            
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>