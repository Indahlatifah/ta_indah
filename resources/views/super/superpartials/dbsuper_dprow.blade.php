 
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
                            <td>
                              @if ($laporan->status == 'diterima')
                                  Diterima
                                  @elseif ($laporan->status == 'ditolak')
                                  ditolak
                              @else
                                Menunggu Konfirmasi
                              @endif
                          </td>
                  <td>
                            <a href="/detail/tanggapan/{{ $laporan->id }}">Detail</a>
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
                  @foreach($laporan as $laporanItem) <!-- Ubah variabel $laporan menjadi $laporanItem -->
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $laporanItem->isi }}</td>
                      <td><img src="{{ asset('image/' . $laporanItem->image) }}" alt="" style="width: 80px;"></td>
                      <td>
                          <span class="tag tag-success">
                              @if ($laporanItem->bidang == 0)
                              Kemahasisaan
                              @elseif ($laporanItem->bidang == 1)
                              Akademik
                              @elseif ($laporanItem->bidang == 2)
                              Keamanan
                              @elseif ($laporanItem->bidang == 3)
                              Sarana Prasarana
                              @elseif ($laporanItem->bidang == 4)
                              Keuangan
                              @elseif ($laporanItem->bidang == 5)
                              Umum
                              @endif
                          </span>
                      </td>
                      <td>
                          @if ($laporanItem->jenis == 1)
                          Pengaduan
                          @else
                          Aspirasi
                          @endif
                      </td>
                      <td>
                          @if ($laporanItem->status == 'diterima')
                          Diterima
                          @elseif ($laporanItem->status == 'ditolak')
                          Ditolak <!-- Ubah menjadi huruf besar -->
                          @else
                          Menunggu Konfirmasi
                          @endif
                      </td>
                      <td>
                          <a href="/detail/tanggapan/{{ $laporanItem->id }}">Detail</a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
      <!-- Tampilkan tautan paginasi -->
      {{-- <div class="pagination">
        {{ $laporan->links() }}
    </div>
     --}}
    
    
    