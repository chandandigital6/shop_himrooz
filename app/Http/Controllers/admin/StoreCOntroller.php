<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class StoreCOntroller extends Controller
{
    public function GetProduct(){
        $product=Product::all();
        return view('front.store',compact('product'));
    }
}
