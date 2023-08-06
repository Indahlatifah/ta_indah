<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}