<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmumController 
{
     public function umumHome()
    {
        return view('umum.umumdb',
        [
            'title' => 'db_umum'
        ]);
    }

    public function umumPengaduan()
    {
        return view('umum.pengaduan',
        [
            'title' => 'umum_pengaduan'
        ]);
    }

    public function umumcracc()
    {
        return view('umum.create_account',
        [
            'title' => 'Buat Akun'
        ]);
    }

    public function umumdtpengaduan()
    {
        return view('umum.detail_pengaduan',
        [
            'title' => 'Detail Pengaduan'
        ]);
    }
    public function umumProfil()
    {
        return view('umum.profil',
        [
            'title' => 'Profil'
        ]);
    }

    public function umumEditprofil()
    {
        return view('umum.edit_profil',
        [
            'title' => 'Edit Profil'
        ]);
    }
}