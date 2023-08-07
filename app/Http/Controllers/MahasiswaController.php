<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
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
    public function createmhs()
    {
        return view('mhs.pengaduan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storemhs(Request $request)
    {
        // dd($request->all());
       Laporan::create([
            'jenis' => $request -> jenis,
            'bidang' => $request -> bidang,
            'isi' => $request -> isi,
            'gambar' => $request -> gambar,
        
        ]);
     
        $laporan=Laporan::all(); //pemanggilan data -- pake DB::table() bisa juga
        return view('mhs.mhsdb');
        }

}