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
}
