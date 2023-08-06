<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController 
{
     public function keuanganHome()
    {
        return view('keuangan.keuangandb',
        [
            'title' => 'db_keuangan'
        ]);
    }

    public function keuanganPengaduan()
    {
        return view('keuangan.pengaduan',
        [
            'title' => 'keuangan_pengaduan'
        ]);
    }

    public function keuangancracc()
    {
        return view('keuangan.create_account',
        [
            'title' => 'Buat Akun'
        ]);
    }

    public function keuangandtpengaduan()
    {
        return view('keuangan.detail_pengaduan',
        [
            'title' => 'Detail Pengaduan'
        ]);
    }
    public function keuanganProfil()
    {
        return view('keuangan.profil',
        [
            'title' => 'Profil'
        ]);
    }

    public function keuanganEditprofil()
    {
        return view('keuangan.edit_profil',
        [
            'title' => 'Edit Profil'
        ]);
    }
}