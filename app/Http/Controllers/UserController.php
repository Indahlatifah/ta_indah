<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $posts = User::latest()->get();
        return view('users.index', compact('users'));
    }
}
