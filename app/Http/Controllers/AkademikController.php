<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function AkdEditprofil()
    {
        return view('akd.edit_profil',
        [
            'title' => 'Edit Profil'
        ]);
    }
}