<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController
{

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
    public function index()
    {
        return view('login.index', 
        [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $request->validate( 
        [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->type == 'superadmin') 
            {
                return redirect()->route('superadmin.home');
            }
            else if (auth()->user()->type == 'kemahasiswaan') 
            {
                return redirect()->route('kemahasiswaan.home');
            }
            else if (auth()->user()->type == 'akademik') {

                return redirect()->route('akademik.home');

            }
            else if (auth()->user()->type == 'kamsisdal') {

                return redirect()->route('kamsisdal.home');

            }
            else if (auth()->user()->type == 'sarpras') {

                return redirect()->route('sarpras.home');

            }
            else if (auth()->user()->type == 'direksi') {

                return redirect()->route('direksi.home');

            }
            else if (auth()->user()->type == 'keuangan') {

                return redirect()->route('keuangan.home');

            } 
            else if (auth()->user()->type == 'umum') {

                return redirect()->route('umum.home');

            }            
            else{
                return redirect()->route('mhs.db');
            }
        }
        return back()->with('loginError','Gagal Login!');
     }

     public function logout()
     {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
     }
}
