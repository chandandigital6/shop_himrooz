<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Product;

class FrontController extends Controller
{
     public function index(){
         $categories = Categorie::orderBy('name')->get();
         $product=Product::all();
//         dd($categories);
         return view('front.home',compact('categories','product'));

     }
    public function productShow($productId) {
        $showProduct = Product::find($productId);
//        dd($showProduct);

        return view('front.productDetail', compact('showProduct'));
    }

}
