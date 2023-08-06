<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController 
{
    public function index()
    {   
        return view('mhs.mhsdb', 
            [
                'title' => 'DB_Mahasiswa'
            ]);
    } 
    public function MhsPengaduan()
    {
        return view('mhs.pengaduan',
        [
            'title' => 'mhs_pengaduan'
        ]);
    }


    public function MhsProfil()
    {
        return view('mhs.profil',
        [
            'title' => 'Profil'
        ]);
    }

    public function MhsEditprofil()
    {
        return view('mhs.edit_profil',
        [
            'title' => 'Edit Profil'
        ]);
    }
}