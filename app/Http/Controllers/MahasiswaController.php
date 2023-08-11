<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

         public function editprofil(User $user)
            {
                // $user = User::find($user)->get();
                // $user = DB::table('users')->where('id', $user)->first();
                // dd($user);

                return view('mhs.edit_profile', compact('user'));
            }

            public function updateprofil(Request $request, User $user)
            {
                   $request->validate([
                    'name' => 'required',
                    'email' => 'required',
                    'password' => 'required',

                ]);

                $user->name = request('name');
                $user->email = request('email');
                $user->password = bcrypt(request('password'));
                $user->save();

                   return redirect('/mhs/profil')->with('success','Data Berhasil di Update');
}

}