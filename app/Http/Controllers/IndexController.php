<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        return view('backend.pages.home.home');
    }

    public function category(){
        return view('backend.pages.category.categoryForm');
    }

    public function categoryCreate(Request $request){

        //dd($request->all());

        Category::create([

            "name"=>$request->name,
            "type"=>$request->type,
            "description"=>$request->description

        ]);
        return redirect()->back();
    }
    public function categoryList(){
        return view('backend.pages.category.categoryList');
    }


}

