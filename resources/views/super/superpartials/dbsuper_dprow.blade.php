 
        {{-- <div class="card-body table-responsive p-0">
            <table class="table table-head-fixed text-wrap">
              <thead>
                <tr>
                  <th>No</th>
                  <th class="col-sm-3">Pesan</th>
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
                  <td><img src="{{ asset('image/' .$laporan->imageName) }}" alt="" style="width: 80px;"></td>
                  <td><span class="tag tag-success">  
                    {{-- {{$laporan->bidang}} --}}
                    {{-- @if ($laporan->bidang==0)
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
                    <a href="/superadmin/detail">Detail</a> 
                    
                  </td>
            
                </tr>
                @endforeach
              </tbody>
            </table>
          </div> --}} 
          <div class="card-body table-responsive p-0">
            <table class="table table-head-fixed text-wrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="col-sm-3">Pesan</th>
                        <th>Gambar</th>
                        <th>Bidang</th>
                        <th>Jenis</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach($laporan as $laporan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $laporan->isi }}</td>
                        <td><img src="{{ asset('image/' . $laporan->image) }}" alt="" style="width: 80px;"></td>
                        <td>
                            <span class="tag tag-success">
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
                            </span>
                        </td>
                        <td>
                            @if ($laporan->jenis == 1)
                            Pengaduan
                            @else
                            Aspirasi
                            @endif
                        </td>
                        <td>Diterima</td>
                        <td>
                            <a href="/superadmin/detail">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>