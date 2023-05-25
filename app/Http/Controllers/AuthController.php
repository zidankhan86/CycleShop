<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registration(){
        return view('backend.pages.registration.registration');
    }

    public function login(){
        return view('backend.pages.login.login');
    }
}
