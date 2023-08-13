<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import DB facade
use App\Models\Laporan; // Import model Laporan

class DataPengaduanController 
{
    public function index()
    {
        // Mengambil data pengaduan per bidang
        $dataPengaduan = Laporan::select('bidang', DB::raw('count(*) as jumlah_pengaduan'))
            ->groupBy('bidang')
            ->get();

        // Kirim data ke tampilan
        return view('super.superadmindb', compact('dataPengaduan'));
    }
}