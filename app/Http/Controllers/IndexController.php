<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        return view('backend.pages.home.home');
    }

    public function category(){
        return view('backend.pages.category.categoryForm');
    }


}

