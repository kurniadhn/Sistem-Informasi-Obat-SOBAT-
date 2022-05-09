<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}