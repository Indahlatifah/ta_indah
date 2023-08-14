
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
              <th>Tanggapan</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @php $nomor = 1; @endphp <!-- Inisialisasi variabel nomor -->
          @foreach($laporan as $item)
          @if ($item->bidang == 0) <!-- Filter hanya bidang akademik -->
          <tr>
              <td>{{ $nomor }}</td> <!-- Gunakan variabel nomor -->
              <td>{{ $item->isi }}</td>
              <td><img src="{{ asset('image/' . $item->image) }}" alt="" style="width: 80px;"></td>
              <td>
                  <span class="tag tag-success">
                      @if ($item->bidang == 0)
                          Kemahasiswaan
                      @elseif ($item->bidang == 1)
                          Akademik
                      @elseif ($item->bidang == 2)
                          Keamanan
                      @elseif ($item->bidang == 3)
                          Sarana Prasarana
                      @elseif ($item->bidang == 4)
                          Keuangan
                      @elseif ($item->bidang == 5)
                          Umum
                      @endif
                  </span>
              </td>
              <td>
                  @if ($item->jenis == 1)
                      Pengaduan
                  @else
                      Aspirasi
                  @endif
              </td>
              <td>
                  @if ($item->status == 'diterima')
                  Diterima
                  @elseif ($item->status == 'ditolak')
                  Ditolak <!-- Ubah menjadi huruf besar -->
                  @else
                  Menunggu Konfirmasi
                  @endif
              </td>
                    <td>@if ($item->tanggapan == '')
                      Belum ditanggapi
                    @else
                  {{ $item->tanggapan }}
                  @endif
                    </td>
              <td>
                  <a href="/kemahasiswaan/detail/tanggapan/{{ $item->id }}">Detail</a>
              </td>
          </tr>
          @php $nomor++; @endphp <!-- Increment variabel nomor -->
          @endif
          @endforeach
      </tbody>
  </table>
</div>
