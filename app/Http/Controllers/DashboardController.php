<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController 
{
    //
    public function index()
    {
        //return view::make('pages.index', array('title' => 'Title'));   
        return view('dashboard', 
            [
                'title' => 'DB_Mahasiswa'
            ]);
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Superadmindb()
    {
        return view('super.Superadmindb',
        [
            'title' => 'DB_Superdamin'
        ]);
    }

    public function SuperPengaduan()
    {
        return view('super.pengaduan',
        [
            'title' => 'SP Pengaduan'
        ]);
    }

    public function Supercracc()
    {
        return view('super.create_account',
        [
            'title' => 'SP Buat Akun'
        ]);
    }
    public function SuperEditAccount()
    {
        return view('super.edit_account',
        [
            'title' => 'SP Edit Akun'
        ]);
    }

    public function Superdtpengaduan()
    {
        return view('super.detail_pengaduan',
        [
            'title' => 'SP Detail Pengaduan'
        ]);
    }
    public function SuperEdit()
    {
        return view('super.edit',
        [
            'title' => 'Edit'
        ]);
    }

    public function SuperProfil()
    {
        return view('super.profile',
        [
            'title' => 'Profil'
        ]);
    }

    public function SuperEditprofile()
    {
        return view('super.edit_profile',
        [
            'title' => 'Edit Profil'
        ]);
    }

    public function Superdpakun()
    {
        return view('super.superadmindp',
        [
            'title' => 'V Admin'
        ]);
    }

        public function Superadmincontrol()
    {
        return view('super.admin_control',
        [
            'title' => 'daftarakun'
        ]);
    }

    public function Supercreate()
    {
        return view('super.create_account');
    }
 
    public function Supercreate_user(Request $request)
    {
        User::create([
        'name' => $request -> name,
        'email' => $request -> email,
        'password' => bcrypt($request->password),
        'type' => $request -> type,
        'remember_token' => Str::random(60),
      ]);
    //   return
    $users = User::all(); //pemanggilan data -- pake DB::table() bisa juga
    return view('super.admin_control', compact('users'));
    }

 public function Super_read()
 {
    $users = DB::table('users') -> get();
    return view('super.admin_control', ['users' => $users]);

}

public function editakun(User $users)
{
    
    return view('super.edit_account', compact('users'));
}

public function updateakun(Request $request, User $users)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'type' => 'required',
    ]);

    $users->update($request->all());

    return redirect()->route('updateaccount')->with('succes','Siswa Berhasil di Update');
}
}
