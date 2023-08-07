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

    // public function Supercreate()
    // {
    //     return view('super.create_account');
    // }
 
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
    // $users = User::all(); //pemanggilan data -- pake DB::table() bisa juga
    $users = DB::table('users') -> get();
    return view('super.admin_control', compact('users'));
    // return redirect('superadmin/admincontrol/listuser');
    }

 public function Super_read()
 {
    // $users = User::all();
    $users = DB::table('users') -> get();
    return view('super.admin_control', ['users' => $users]);
    // return redirect('superadmin/admincontrol/listuser', ['users' => $users]);

}

public function editakun(User $user)
{
    // $user = User::find($user)->get();
    // $user = DB::table('users')->where('id', $user)->first();
    // dd($user);
    
    return view('super.edit_account', compact('user'));
}

public function updateakun(Request $request, User $user)
{
    // $user = DB::table('users')->where('id', $user)->first();
    // $user = User::find($user)->get();
    // dd($user);

    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'type' => 'required',
    ]);
    
    // $attr = $request->all();
    // $user->update($attr);
    // $user->save($request->all());

    // dd($user);
    // return view('super.admin_control', compact('users'));
    $user->name = request('name');
    $user->email = request('email');
    $user->password = bcrypt(request('password'));
    $user->type = request('type');

    $user->save();

    return redirect('superadmin/admincontrol/listuser')->with('succes','Siswa Berhasil di Update');
    // return back();
}
}
