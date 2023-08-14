<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Laporan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;


class LaporanController
{
public function index()
{
    $laporan = Laporan::paginate(10); // Mengambil 10 data per halaman
    return view('super.pengaduan', compact('laporan'));
}

// public function indexmhs()
// {
//     $userId = Auth::user()->id; // Ambil id pengguna yang sedang masuk

//     // Ambil laporan hanya untuk akun dengan id_user yang sesuai
//     $laporanList = Laporan::where('id_user', $userId)->paginate(10);

//     return view('mhs.mhsdb', compact('laporanList'));
// }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $laporan = Auth::user()->id;
        return view('laporan.create_laporan');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        $request->validate([
            // Definisi validasi untuk setiap field (jika perlu)
        ]);
        
      
        $laporan = Laporan::create([
                'id_user' => Auth::user()->id,
                'bidang' => $request->bidang,
                'jenis' => $request->jenis,
                'isi' => $request -> isi,
                'tanggapan' => $request ->tanggapan,
                'status' => $request ->status,
    //             // 'image' => $request-> image,
                
            ]);
        // Cek apakah ada file gambar yang di-upload
        if ($request->hasFile('image')) {
            $imagePath = 'image/';
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move($imagePath, $imageName);
            $laporan->image = $imageName;
            $laporan->save();
        }
    
        // Ambil semua data laporan setelah penambahan
        $laporan = Laporan::all();
    
        return view('super.pengaduan', compact('laporan'));
    }
    public function createmhs()
    {
        // $laporan = Auth::user()->id;
        return view('mhs.mhsdb');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    
    public function storemhs(Request $request)
{
    $request->validate([
        // Definisi validasi untuk setiap field (jika perlu)
    ]);

    // Buat data laporan baru
    $laporan = new Laporan([
        'id_user' => Auth::user()->id,
        'bidang' => $request->bidang,
        'jenis' => $request->jenis,
        'isi' => $request->isi,
        'tanggapan' => $request->tanggapan,
        'status' => $request->status,
    ]);

    // Cek apakah ada file gambar yang di-upload
    if ($request->hasFile('image')) {
        $imagePath = 'image/';
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move($imagePath, $imageName);
        $laporan->image = $imageName;
    }

    // Simpan data laporan ke dalam database
    $laporan->save();
    $userId = Auth::user()->id;
    // Ambil semua data laporan setelah penambahan
    $laporanList = Laporan::where('id_user', $userId)->get();

    // Redirect atau tampilkan view dengan data laporan
    return view('mhs.mhsdb', compact('laporanList'));
}

        
       
        public function read()
        {
           $laporan = DB::table('laporan') -> get();
           return view('super.pengaduan', ['laporan' => $laporan]);
       
       }
  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $laporan = Laporan::findOrFail($id);
    // Jika Anda ingin membatasi hanya pengguna tertentu yang dapat mengedit laporan mereka sendiri,
    // Anda dapat menambahkan logika verifikasi di sini (misalnya, memeriksa id_user dengan Auth::user()->id).

    return view('super.detail_pengaduan', compact('laporan'));
}



// }
public function update(Request $request, $id)
{
    $request->validate([
        // Definisi validasi untuk setiap field (jika perlu)
    ]);

    // Mengambil data laporan dari database
    $laporan = Laporan::findOrFail($id);

    // Memperbarui kolom 'tanggapan' dan 'status' dari request
    $laporan->tanggapan = $request->tanggapan;
    $laporan->status = $request->status;
    // $laporan->isi = $request->isi;

    // Cek apakah ada file gambar yang di-upload
    if ($request->hasFile('image')) {
        $imagePath = 'image/';
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move($imagePath, $imageName);
        $laporan->image = $imageName;
    }

    // Menyimpan perubahan

    $laporan->save();
    $laporan = Laporan::all();

    // Meredireksi kembali ke halaman yang diinginkan setelah berhasil mengedit laporan
    // 
    return view('super.pengaduan', compact('laporan'));
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function readdireksi()
    {
       $laporan = DB::table('laporan') -> get();
       return view('direksi.pengaduan', ['laporan' => $laporan]);
   
   }
   public function readmhs()
   {
    //   $laporan = DB::table('laporan') -> get();
    //   return view('mhs.mhsdb', ['laporan' => $laporan]);
    $userId = Auth::user()->id; // Ambil id pengguna yang sedang masuk

    // Ambil laporan hanya untuk akun dengan id_user yang sesuai
    $laporanList = Laporan::where('id_user', $userId)->get();

    return view('mhs.mhsdb', compact('laporanList'));
  }
   public function readakd()
    {
       $laporan = DB::table('laporan') -> get();
       return view('akd.pengaduan', ['laporan' => $laporan]);
   
   }
   public function readkmd()
    {
       $laporan = DB::table('laporan') -> get();
       return view('kmd.pengaduan', ['laporan' => $laporan]);
   
   }
   public function readkms()
   {
      $laporan = DB::table('laporan') -> get();
      return view('kms.pengaduan', ['laporan' => $laporan]);
  
  }
   public function readumum()
   {
      $laporan = DB::table('laporan') -> get();
      return view('umum.pengaduan', ['laporan' => $laporan]);
  
  }
  public function readkeuangan()
   {
      $laporan = DB::table('laporan') -> get();
      return view('keuangan.pengaduan', ['laporan' => $laporan]);
  
  }
  public function readsarpras()
   {
      $laporan = DB::table('laporan') -> get();
      return view('sarpras.pengaduan', ['laporan' => $laporan]);
  
  }
}
