<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productForm(){
        return view('backend.pages.product.productForm');
    }

    public function productStore(Request $request){

        //dd($request->all());
        Product::create([
            "name" =>$request->name,
            "price"=>$request->price,
            "description"=>$request->description,
            "stock"=>$request->stock,
            "image"=>$request->image,
            "status"=>"pending",

        ]);
        return back();
    }

    public function productList(){
        return view('backend.pages.product.productList');
    }
}
