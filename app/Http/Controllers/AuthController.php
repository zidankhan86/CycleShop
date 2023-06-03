<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function registration(){
        return view('backend.pages.registration.registration');
    }

    public function login(){
        return view('backend.pages.login.login');
    }

    public function getRegistration(Request $request){

        $validation = Validator::make($request->all(),[

            "name"=>'required',
            "email"=>'required',
        ]);

        User::create([

            "name"=>$request->name,
            "email"=>$request->email,
            "address"=>$request->address,
            "password"=>bcrypt($request->password),
            "role"=>"customer"

        ]);
    }
}
