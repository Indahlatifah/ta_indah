<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Laporan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DireksiController 
{
     public function DireksiHome()
    {
        return view('direksi.direksidb',
        [
            'title' => 'db_Direksi'
        ]);
    }

    public function DireksiPengaduan()
    {
        return view('Direksi.pengaduan',
        [
            'title' => 'direksi_pengaduan'
        ]);
    }

    public function Direksicracc()
    {
        return view('direksi.create_account',
        [
            'title' => 'Buat Akun'
        ]);
    }

    public function Direksidtpengaduan()
    {
        return view('direksi.detail_pengaduan',
        [
            'title' => 'Detail Pengaduan'
        ]);
    }
    public function DireksiProfil()
    {
        return view('direksi.profil',
        [
            'title' => 'Profil'
        ]);
    }

    public function DireksiEditprofil()
    {
        return view('direksi.edit_profil',
        [
            'title' => 'Edit Profil'
        ]);
    }
    public function readdetail($id)
    {
        $laporan = Laporan::findOrFail($id);
        // Jika Anda ingin membatasi hanya pengguna tertentu yang dapat mengedit laporan mereka sendiri,
        // Anda dapat menambahkan logika verifikasi di sini (misalnya, memeriksa id_user dengan Auth::user()->id).
    
        return view('direksi.detail_pengaduan', compact('laporan'));
    }
    
    public function editprofil(User $user)
    {
        // $user = User::find($user)->get();
        // $user = DB::table('users')->where('id', $user)->first();
        // dd($user);

        return view('direksi.edit_profil', compact('user'));
    }

    public function updateprofil(Request $request, User $user)
    {
           $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

           return redirect('/direksi/profil')->with('success','Data Berhasil di Update');
}
//     public function readdireksi()
//     {
//        $laporan = DB::table('laporan') -> get();
//        return view('direksi.pengaduan', ['laporan' => $laporan]);
   
//    }
}