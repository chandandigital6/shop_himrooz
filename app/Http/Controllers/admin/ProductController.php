<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $product = Product::query();

        if (!empty($keyword)) {
            $product->where('title', 'like', "%$keyword%");
        }

        $product = $product->paginate(5);
        return view('product.index', compact('product'));

    }
    public function create(){
        $categories = Categorie::orderBy('name')->get();
        $subCategories = SubCategory::orderBy('name')->get();
        $brand = Brand::orderBy('name')->get(); // Corrected the typo here
        return view('product.create',compact('brand','subCategories','categories'));
    }

    public function store(ProductRequest $request){
             $product=Product::create($request->all());
        $image = $request->file('image')->store('public/ProductImage');

        $product->image = str_replace('public/', '', $image);
        $product->save();
        return redirect()->route('product.index')->with('success','Successfullly stored product items');
    }
    public function edit($product){
        $categories = Categorie::orderBy('name')->get();
        $subCategories = SubCategory::orderBy('name')->get();
//        dd($subCategories);
        $brand = Brand::orderBy('name')->get(); // Corrected the typo here
      $product=Product::find($product);
//      dd($product);
      return view('product.edit',compact('product','categories','subCategories','brand'));

    }
    public function update(Product $product ,ProductRequest $request){
        $product->update($request->all());

        $request->hasFile('image') ? $product->update(['image' => str_replace('public/', '', $request->file('image')->store('public/ProductImage'))]) : '';
        return redirect()->route('product.index')->with('success','product item successfully updated');

    }


    public function delete(Product $product){
        $product->delete();
        return redirect()->route('product.index')->with('error','Successfully stored product items deleted');

    }
}
