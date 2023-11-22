<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\ProductVariation;
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
//        dd($request->file('variation_image')[0]);
        $product=Product::create($request->all());
        $image = $request->file('image')->store('public');

        $product->image = str_replace('public/', '', $image);
        $product->save();

        $variation_name = $request->variation_name;
        $variation_price = $request->variation_price;
        $variation_discount = $request->variation_discount;
        $variation_image = $request->variation_image;

        foreach ($variation_name as $key => $value) {
            $productVariation = new ProductVariation();
            $productVariation->name = $variation_name[$key];
            $productVariation->price = $variation_price[$key];
            $productVariation->discountPercentage = $variation_discount[$key];
            $variation_image = $request->file('variation_image')[0]->store('public');
            $productVariation->image = str_replace('public/', '', $variation_image);
            $productVariation->product_id = $product->id;
            $productVariation->save();
        }
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

        $request->hasFile('image') ? $product->update(['image' => str_replace('public/', '', $request->file('image')->store('public'))]) : '';
        return redirect()->route('product.index')->with('success','product item successfully updated');

    }
   public function duplicate(Product $product){

          $duplicateProduct=$product->replicate();
          $duplicateProduct->save();

          return redirect()->back();
   }

    public function delete(Product $product){
        if($product->image){
            unlink('storage/' .$product->image);
        }
        foreach ($product->variations as $variation){
            if($variation->image){
                unlink('storage/' .$variation->image);
            }
        }
        $product->variations()->delete();
        $product->delete();
        return redirect()->route('product.index')->with('error','Successfully stored product items deleted');

    }
}
