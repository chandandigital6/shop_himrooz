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
        session()->flash('success', 'Product added to wishlist successfully!');
        return redirect()->back();
    }


    public function delete(Wishlist $wishlist){
        $wishlist->delete();
        session()->flash('success', 'Product successfully removed from wishlist!');
        return redirect()->back();
    }
}
