<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Laporan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LaporanController
{
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('laporan.pengaduan', ['laporan' => DB::table('laporan')->paginate(15)]);
        
    // }
    public function index()
{
    $laporan = Laporan::all();

    return view('super.pengaduan', compact('allLaporan'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $laporan = Auth::user()->id;
        return view('laporan.create_laporan');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        $request->validate([
            // Definisi validasi untuk setiap field (jika perlu)
        ]);
        
      
        $laporan = Laporan::create([
                'id_user' => Auth::user()->id,
                'bidang' => $request->bidang,
                'jenis' => $request->jenis,
                'isi' => $request -> isi,
                'tanggapan' => $request ->tanggapan,
                'status' => $request ->status,
    //             // 'image' => $request-> image,
                
            ]);
        // Cek apakah ada file gambar yang di-upload
        if ($request->hasFile('image')) {
            $imagePath = 'image/';
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move($imagePath, $imageName);
            $laporan->image = $imageName;
            $laporan->save();
        }
    
        // Ambil semua data laporan setelah penambahan
        $laporan = Laporan::all();
    
        return view('super.pengaduan', compact('laporan'));
    }
        // if($request->hasFile('image')){
        //     $request->file('image')->move('image/', $request->file('image')->getClientOriginalName());
        //     $laporan->image = $request->file('image')->getClientOriginalName();
        //     $laporan->save();
        // }

      
        // $laporan= Laporan::all(); //pemanggilan data -- pake DB::table() bisa juga
        // return view('super.pengaduan', compact('laporan'));
        // }

       
        public function read()
        {
           $laporan = DB::table('laporan') -> get();
           return view('super.pengaduan', ['laporan' => $laporan]);
       
       }
  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
