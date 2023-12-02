<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class HomeController extends Controller
{
    public function index(){
        return view('admin.dashboard');
//        echo "welocme";
//        echo "<br>";
//        echo "<a href='" . route('admin.logout') . "'>Logout</a>";
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }

    public function profile(){
        $orders = Order::where('user_id', Auth::guard('admin')->user()->id)->get();
        $wishlists = Wishlist::where('user_id', Auth::guard('admin')->user()->id)->get();
        return view('front.profile',compact('orders', 'wishlists'));
    }
}
