<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\HomeSlider;
use App\Models\Product;

class FrontController extends Controller
{
     public function index(){
         $categories = Categorie::orderBy('name')->get();
         $product=Product::all();
         $sliderImages=HomeSlider::all();
//         dd($categories);
         return view('front.home',compact('categories','product','sliderImages'));

     }
    public function productShow($productId) {
        $showProduct = Product::find($productId);
//        dd($showProduct);

        return view('front.productDetail', compact('showProduct'));
    }

}
