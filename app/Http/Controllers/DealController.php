<?php

namespace App\Http\Controllers;

use App\Http\Requests\DealRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\Deal;

class DealController extends Controller
{
    public function index(){
        $deals = Deal::all();
        return view('deal.index', compact('deals'));
    }

    public function create(Product $product){
        $variations = $product->variations;
        return view('deal.create', compact('product', 'variations'));
    }

    public function store(DealRequest $request){
        Deal::create($request->all());
        return redirect('admin/deal/');
    }

    public function edit(Deal $deal){
        $variations = ProductVariation::where('product_id', $deal->product_id)->get();
        return view('deal.edit', compact('deal', 'variations'));
    }

    public function update(DealRequest $request, Deal $deal){
        $deal->update($request->all());
        return redirect('admin/deal/');
    }
}
