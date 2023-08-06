<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SarprasController 
{
     public function SarprasHome()
    {
        return view('sarpras.sarprasdb',
        [
            'title' => 'db_Sarpras'
        ]);
    }

    public function SarprasPengaduan()
    {
        return view('Sarpras.pengaduan',
        [
            'title' => 'sarpras_pengaduan'
        ]);
    }

    public function Sarprascracc()
    {
        return view('sarpras.create_account',
        [
            'title' => 'Buat Akun'
        ]);
    }

    public function Sarprasdtpengaduan()
    {
        return view('sarpras.detail_pengaduan',
        [
            'title' => 'Detail Pengaduan'
        ]);
    }
    public function SarprasProfil()
    {
        return view('sarpras.profil',
        [
            'title' => 'Profil'
        ]);
    }

    public function SarprasEditprofil()
    {
        return view('sarpras.edit_profil',
        [
            'title' => 'Edit Profil'
        ]);
    }
}