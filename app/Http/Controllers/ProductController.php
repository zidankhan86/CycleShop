<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productForm(){
        return view('backend.pages.product.productForm');
    }
}
