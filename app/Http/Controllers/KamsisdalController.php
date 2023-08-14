<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Laporan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KamsisdalController 
{
    public function KamsisdalHome()
    {
        return view('kmd.kmddb',
        [
            'title' => 'db_Akademik'
        ]);
    }

    public function KmdPengaduan()
    {
        return view('kmd.pengaduan',
        [
            'title' => 'kmd_pengaduan'
        ]);
    }

    public function Kmdcracc()
    {
        return view('kmd.create_account',
        [
            'title' => 'Buat Akun'
        ]);
    }

    public function Kmddtpengaduan()
    {
        return view('kmd.detail_pengaduan',
        [
            'title' => 'Detail Pengaduan'
        ]);
    }
    public function KmdProfil()
    {
        return view('kmd.profil',
        [
            'title' => 'Profil'
        ]);
    }

    // public function KmdEditprofil()
    // {
    //     return view('kmd.edit_profil',
    //     [
    //         'title' => 'Edit Profil'
    //     ]);
    // }
    public function edit($id)
    {
        $laporan = Laporan::findOrFail($id);
        // Jika Anda ingin membatasi hanya pengguna tertentu yang dapat mengedit laporan mereka sendiri,
        // Anda dapat menambahkan logika verifikasi di sini (misalnya, memeriksa id_user dengan Auth::user()->id).
    
        return view('kmd.detail_pengaduan', compact('laporan'));
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
        return view('kmd.pengaduan', compact('laporan'));
    }
    public function editprofil(User $user)
    {
        // $user = User::find($user)->get();
        // $user = DB::table('users')->where('id', $user)->first();
        // dd($user);

        return view('kmd.edit_profil', compact('user'));
    }

//    
public function updateprofil(Request $request, User $user)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $user->id, // Tambahkan validasi unique
        'password' => 'required',
    ]);

    // Perbarui data pada objek user yang sudah ada
    $user->name = request('name');
    $user->email = request('email');
    $user->password = bcrypt(request('password'));
    $user->save();

    return redirect('/kamsisdal/profil')->with('success', 'Data Berhasil di Update');
}
}