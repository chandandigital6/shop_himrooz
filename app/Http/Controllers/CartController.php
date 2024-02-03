<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Http\Requests\OrderRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index(){
        if(!Auth::guard('admin')->check()){
            return redirect()->route('login');
        }else {
            $cartItems = Cart::where('user_id', Auth::guard('admin')->user()->id)->get();
            return view('front.cart', compact('cartItems'));
        }
    }

    public function add(Product $product){


        // first check if user is logged in or not
        if(!Auth::guard('admin')->check()){
            return redirect()->route('login');
        }else {
            // check is product already exists in cart
            $cart = Cart::where('product_id', $product->id)
                ->where('product_variation_id', $product->variations->first()->id)
                ->where('user_id', Auth::guard('admin')->user()->id)
                ->first();
            if ($cart) {
                $cart->quantity += 1;
                $cart->save();
                session()->flash('success', 'Product added to cart successfully!');
                return redirect()->back();
            } else {
                Cart::create([
                    'user_id' => Auth::guard('admin')->user()->id,
                    'product_id' => $product->id,
                    'product_variation_id' => $product->variations->first()->id,
                    'quantity' => 1,
                ]);
                session()->flash('success', 'Product added to cart successfully!');
                return redirect()->back();
            }
        }


    }

    public function store(CartRequest $request){
        $cart = Cart::where('product_id', $request->product_id)
            ->where('product_variation_id', $request->variation_id)->first();
        if($cart){
            $cart->quantity += $request->quantity;
            $cart->save();
        }else{
            $cart = new Cart();
            $cart->user_id = Auth::guard('admin')->user()->id;
            $cart->product_id = $request->product_id;
            $cart->product_variation_id = $request->variation_id;
            $cart->quantity = $request->quantity;
            $cart->save();
        }

        session()->flash('success', 'Product added to cart successfully!');
        return redirect()->back();

    }

    public function delete(Cart $cart){
        $cart->delete();
        return redirect()->back()->with('success', 'Cart item deleted successfully');
    }

    public function increment(Cart $cart){
        $cart->quantity = $cart->quantity + 1;
        $cart->save();
        session()->flash('success', 'Product added to cart successfully!');
        return redirect()->back();
    }

    public function decrement(Cart $cart){
        $cart->quantity = $cart->quantity - 1;
        $cart->save();
        session()->flash('success', 'Product added to cart successfully!');
        return redirect()->back();
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
            if($item->variation->deal){
                if($item->variation->deal->start_time <= now() && $item->variation->deal->end_time >= now()){
                    $discount = $item->variation->deal->discount;
                    $deal = 'yes';
                }else{
                    $discount = $item->variation->discountPercentage;
                    $deal = '';
                }
            }else{
                $discount = $item->variation->discountPercentage;
                $deal = '';
            }

//            dd($discount);
            $discountedPrice =$item->variation->price - (($item->variation->price* $discount)/100);
            $totalCartAmount += $totalCartAmount + ($discountedPrice * $item->quantity);
        }
//        $totalCartAmount = $request->totalCartAmount;
        return view('front.checkOut', compact('totalCartAmount', 'cartItems'));
    }




}
