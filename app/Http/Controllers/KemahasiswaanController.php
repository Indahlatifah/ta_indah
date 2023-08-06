<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KemahasiswaanController 
{
    public function KemahasiswaanHome()
    {
        return view('kms.kmsdb',
        [
            'title' => 'db_Kemahasiswaan'
        ]);
    }

    public function KmsPengaduan()
    {
        return view('kms.pengaduan',
        [
            'title' => 'kms_pengaduan'
        ]);
    }


    public function Kmsdtpengaduan()
    {
        return view('kms.detail_pengaduan',
        [
            'title' => 'Detail Pengaduan'
        ]);
    }
    public function KmsProfil()
    {
        return view('kms.profil',
        [
            'title' => 'Profil'
        ]);
    }

    public function KmsEditprofil()
    {
        return view('kms.edit_profil',
        [
            'title' => 'Edit Profil'
        ]);
    }
}