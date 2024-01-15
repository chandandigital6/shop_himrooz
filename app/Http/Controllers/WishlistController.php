<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function add(Product $product){
        Wishlist::create([
            'user_id' => Auth::guard('admin')->user()->id,
            'product_id' => $product->id,
            'product_variation_id' => $product->variations->first()->id,
        ]);
        return redirect()->back();
    }
}
