<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{

    public function index(){
        $cartItems =  Cart::all();
        return view('front.cart', compact('cartItems'));
    }
    public function store(CartRequest $request){
        $cart = new Cart();
        $cart->user_id = 2;
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
        Cart::where('user_id', 2)->delete();
        return redirect()->back()->with('success', 'Cart clear successfully');
    }
}
