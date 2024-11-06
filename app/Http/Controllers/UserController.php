<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {     
        return view('create_user'); 
    } 
    
    public function login()
    {
        return view('login');
    }

    public function showDashboard()
    {
        return view('dashboard'); // Ganti 'dashboard' dengan nama file view yang sesuai
    }
}
