<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Product;

class StoreCOntroller extends Controller
{
    public function GetProduct($id = ''){

        if($id == 0) {
            $products = Product::all();
            $categoryName = 'All Products';
        }
            else{
                $categoryName = Categorie::find($id)->name;
                $products=Product::where('categories_id',$id)->get();
            }
        return view('front.store',compact('products','categoryName'));
    }
}
