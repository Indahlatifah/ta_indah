{{-- form --}}
<div id="features" class="tabs">
<section id="form">  
    <div class="container">
      <div class="row text-center">
        <div class="col mb-4">
          <h2 class="fw-bold"> Form Laporan </h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form>
           
            <select class="form-select mb-4" aria-label="bidang">
              <option selected>Pilih bidang tujuan</option>
              <option value="1">Akademik</option>
              <option value="2">Keuangan</option>
              <option value="3">Sarana Prasarana</option>
            </select>
            <select class="form-select mb-4" aria-label="jenis_laporan">
              <option selected>Jenis Laporan</option>
              <option value="1">Pengaduan</option>
              <option value="2">Aspirasi</option>
            </select>
            <div class="mb-4" >
              <label for="pesan" class="form-label">Tulis Pesan Anda Dibawah ini</label>
              <textarea class="form-control" id="pesan" rows="3"></textarea>
            </div>
            <div class="mb-4 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Rahasia</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
     </section>
</div>
        {{-- akhir form --}}
