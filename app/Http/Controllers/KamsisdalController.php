<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'title' => 'akd_pengaduan'
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

    public function KmdEditprofil()
    {
        return view('kmd.edit_profil',
        [
            'title' => 'Edit Profil'
        ]);
    }
}