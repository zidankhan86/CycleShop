<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        $totalCustomer = Customer::get()->count();
        $totalProducts = Product::get()->count();
        return view('backend.pages.home.home',compact('totalCustomer'));
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
        $categories = Category::all();
        return view('backend.pages.category.categoryList',compact('categories'));
    }


}

