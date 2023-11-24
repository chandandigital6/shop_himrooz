<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index(){
        $cartItems =  Cart::where('user_id',Auth::guard('admin')->user()->id)->get();
        return view('front.cart', compact('cartItems'));
    }
    public function store(CartRequest $request){
        $cart = new Cart();
        $cart->user_id = Auth::guard('admin')->user()->id;
        $cart->product_id = $request->product_id;
        $cart->product_variation_id = $request->variation_id;
        $cart->quantity = $request->quantity;
        $cart->save();
        return redirect('/')->with('success','Cart Item add successfully');
    }

    public function delete(Cart $cart){
        $cart->delete();
        return redirect()->back()->with('success', 'Cart item deleted successfully');
    }

    public function increment(Cart $cart){
        $cart->quantity = $cart->quantity + 1;
        $cart->save();
        return redirect()->back()->with('success', 'Cart updated successfully');
    }

    public function decrement(Cart $cart){
        $cart->quantity = $cart->quantity - 1;
        $cart->save();
        return redirect()->back()->with('success', 'Cart updated successfully');
    }

    public function clear(){
        Cart::where('user_id', Auth::guard('admin')->user()->id)->delete();
        return redirect()->back()->with('success', 'Cart clear successfully');
    }

    public function checkout(){

        $cartItems = Cart::where('user_id', Auth::guard('admin')->user()->id)->get();
        $discountedPrice =0;
        $totalCartAmount = 0;
        foreach ($cartItems as $item) {
            $discountedPrice =$item->variation->price - (($item->variation->price* $item->variation->discountPercentage)/100);
            $totalCartAmount += $totalCartAmount + ($discountedPrice * $item->quantity);
        }
//        $totalCartAmount = $request->totalCartAmount;
        return view('front.checkOut', compact('totalCartAmount', 'cartItems'));
    }


}
