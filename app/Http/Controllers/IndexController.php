<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        return view('backend.pages.home.home');
    }

    public function test(){
        return view('backend.pages.list');
    }


}

