<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer(){
        return view('backend.pages.customer.customer');
    }

    public function customerStore(Request $request){

        //dd($request->all());

        Customer::create([
            "name"=>$request->name,
             "email"=>$request->email,
             "phone"=>$request->phone,
             "image"=>$request->image,
             "address"=>$request->address

        ]);
        return redirect()->back()->with('message','Created Success');

    }
}
