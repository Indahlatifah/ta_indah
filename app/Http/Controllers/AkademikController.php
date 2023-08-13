<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Laporan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AkademikController 
{
     public function AkademikHome()
    {
        return view('akd.akddb',
        [
            'title' => 'db_Akademik'
        ]);
    }

    public function AkdPengaduan()
    {
        return view('akd.pengaduan',
        [
            'title' => 'akd_pengaduan'
        ]);
    }

    public function Akdcracc()
    {
        return view('akd.create_account',
        [
            'title' => 'Buat Akun'
        ]);
    }

    public function Akddtpengaduan()
    {
        return view('akd.detail_pengaduan',
        [
            'title' => 'Detail Pengaduan'
        ]);
    }
    public function AkdProfil()
    {
        return view('akd.profil',
        [
            'title' => 'Profil'
        ]);
    }

    // public function AkdEditprofil()
    // {
    //     return view('akd.edit_profil',
    //     [
    //         'title' => 'Edit Profil'
    //     ]);
    // }
    public function edit($id)
    {
        $laporan = Laporan::findOrFail($id);
        // Jika Anda ingin membatasi hanya pengguna tertentu yang dapat mengedit laporan mereka sendiri,
        // Anda dapat menambahkan logika verifikasi di sini (misalnya, memeriksa id_user dengan Auth::user()->id).
    
        return view('akd.detail_pengaduan', compact('laporan'));
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
        return view('akd.pengaduan', compact('laporan'));
    }
    public function editprofil(User $user)
    {
        // $user = User::find($user)->get();
        // $user = DB::table('users')->where('id', $user)->first();
        // dd($user);

        return view('akd.edit_profil', compact('user'));
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

    return redirect('/akademik/profil')->with('success', 'Data Berhasil di Update');
}
}