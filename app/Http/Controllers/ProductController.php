<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productForm(){
        $categories = Category::all();
        return view('backend.pages.product.productForm',compact('categories'));
    }

    public function productStore(Request $request){



        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = date('Ymdhis').'.'.$request->image->extension();
            $request->image->storeAs('uploads', $imageName, 'public');
        }

         // dd($imageName);

         //dd($request->all());


        Product::create([
            "name" =>$request->name,
            "price"=>$request->price,
            "description"=>$request->description,
            "stock"=>$request->stock,
            "image"=>$imageName,
            "category_id"=>$request->category_id,
            "status"=>"pending",

        ]);
        return back();
    }

    public function productList(){

        $cycles = Product::all();
        return view('backend.pages.product.productList',compact('cycles'));
    }


    //Cycle Edit

    public function productEdit($id){
        //dd($id);
        $cycle = Product::find($id);
        $categories = Product::all();

        return view('backend.pages.product.productEdit',compact('cycle','categories'));

    }

    public function productView($id){

        $CycleDetails = Product::find($id);

        $categories = Product::all();
        return view('backend.pages.product.productView',compact('CycleDetails','categories'));

    }
    public function productDelete($id){
        //dd($id);
        $delete = Product::find($id)->delete();

        return back();
    }
}
