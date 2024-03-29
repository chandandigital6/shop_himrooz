<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::paginate(5);
        return view('order.index', compact('orders'));
    }



    public function placeOrder(OrderRequest $request){
        $order = new Order();
        $order->user_id = Auth::guard('admin')->user()->id;
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->address = $request->address;
        $order->house_number = $request->house_number;
        $order->landmark = $request->landmark;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->country = $request->country;
        $order->state = $request->state;
//        $order->status = 0;
        $order->city = $request->city;
        $order->pin = $request->pin;
        $order->amount = $request->amount;
        if($order->save()){
//            dd($order->id);
            $cartItems = Cart::where('user_id',Auth::guard('admin')->user()->id)->get();
            foreach($cartItems as $item){
                $product = Product::find($item->product_id);
                if($product->qty >= $item->quantity){
                    $orderItem = new OrderItem();
                    $orderItem->order_id = $order->id;
                    $orderItem->product_id = $item->product_id;
                    $orderItem->product_variation_id = $item->product_variation_id;
                    $product->qty = $product->qty - $item->quantity;
                    $product->save();
                    $orderItem->quantity = $item->quantity;
                    $orderItem->save();
                }
            }
            Cart::where('user_id', Auth::guard('admin')->user()->id)->delete();
        }
        return redirect('/');
    }

    public function orderCancelOrReturn(Order $order, $type){
        $order->update([
            'status' => $type == 'cancel' ? 'canceled' : 'returned',
        ]);
        return redirect()->back();
    }


}
