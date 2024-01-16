<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Auth;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\ProductVariation;
use App\Models\Review;
use App\Models\SubCategory;
use Illuminate\Auth\Events\Validated;
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
        $image = $request->file('image')->store('public');

        $product->image = str_replace('public/', '', $image);
        $product->save();

        $product_tags = $request->all_product_tags;

        foreach ($product_tags as $key => $value) {
            $product_tag = new ProductTag();
            $product_tag->product_id = $product->id;
            $product_tag->name = $value;
            $product_tag->save();
        }


        $variation_name = $request->variation_name;
        $variation_price = $request->variation_price ?? '';
        $variation_discount = $request->variation_discount;
        $variation_image = $request->variation_image;

        foreach ($variation_name as $key => $value) {
            $productVariation = new ProductVariation();
            $productVariation->name = $variation_name[$key];
            $productVariation->price = $variation_price[$key];
            $productVariation->discountPercentage = $variation_discount[$key];
            $variation_image = $request->file('variation_image')[$key]->store('public');
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

        $variation_id = $request->id;
        $variation_name = $request->variation_name;
        $variation_price = $request->variation_price ?? '';
        $variation_discount = $request->variation_discount;

        $variation_image = $request->variation_image;
        $product_tags = $request->all_product_tags;
        $product->productTags()->delete();
        foreach ($product_tags as $key => $value) {
            $product_tag = new ProductTag();
            $product_tag->product_id = $product->id;
            $product_tag->name = $value;
            $product_tag->save();
        }

        foreach ($variation_name as $key => $value) {
            $productVariation = ProductVariation::find($variation_id[$key]);
            $productVariation->name = $variation_name[$key];
            $productVariation->price = $variation_price[$key];
            $productVariation->discountPercentage = $variation_discount[$key];
            if($request->file('variation_image')){
                unlink('storage/' .$productVariation->image);
                $variation_image = $request->file('variation_image')[$key]->store('public');
                $productVariation->image = str_replace('public/', '', $variation_image);
            }
            $productVariation->product_id = $product->id;
            $productVariation->save();
        }

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

        $product->productTags()->delete();


        $product->variations()->delete();
        $product->delete();
        return redirect()->route('product.index')->with('error','Successfully stored product items deleted');

    }

    public function tagDelete(ProductTag $tag){
        $tag->delete();
        return redirect()->back()->with('success', 'Tag Deleted successfully');
    }

    public function variationDelete(ProductVariation $variation){
        $product = Product::find($variation->product_id);
        if($product->variations->count() > 1 ){
            $variation->delete();
            return redirect()->back()->with('success', 'Variation Deleted successfully');
        }else{
            return redirect()->back()->with('danger', 'Minimum 1 variation required');
        }
    }

    Public function search(Request $request){
        $keyword = $request->input('searchBox');
        $productTag = ProductTag::where('name', 'like', "%$keyword%")->pluck('product_id');

        // check if no match found
        if($productTag->count() == 0){
            $products = Product::where('title', 'like', "%$keyword%")->orWhere('description', 'like', "%$keyword%")->pluck('id');
            if($products->count() == 0){
                session()->flash('error', 'No match found');
                return redirect('/');
            }
            else{
                $products = Product::whereIn('id', $products)->get();
                session()->flash('success', 'Search results');
                return view('front.store',compact('products'));
            }
        }
        else{
            $products = Product::whereIn('id', $productTag)->get();
            session()->flash('success', 'Search results');
            return view('front.store',compact('products'));
        }
    }



    public function review(Request $request, Product $product){

        $request->validate([
            'title' => 'required',
            'message' => 'required',
            'rating' => 'required',
        ]);

        // check if user is logged in
        if(!auth()->guard('admin')->user()){
            return redirect('login')->with('error', 'Please login to add review');
        }
        else{

        Review::create([
            'title' => $request->title,
            'message' => $request->message,
            'rating' => $request->rating,
            'user_id' => auth()->guard('admin')->user()->id,
            'product_id' => $product->id,
        ]);
        return redirect()->back()->with('success', 'Review added successfully');

        }

    }

}
