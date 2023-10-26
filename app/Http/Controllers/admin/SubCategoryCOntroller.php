<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Models\Categorie;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryCOntroller extends Controller
{

    public function index(Request $request){
        $keyword = $request->input('keyword');
        $subcategories = SubCategory::query();

        if (!empty($keyword)) {
            $subcategories->where('name', 'like', "%$keyword%");
        }

        $subcategories = $subcategories->paginate(5);

        return view('subCategory.index', compact('subcategories'));
    }
    public  function create(){
        $category=Categorie::orderBy('name')->get();
//        dd($category);
        return view('subCategory.create',compact('category'));
    }
    public function store(SubCategoryRequest $request){

           $subcategory=SubCategory::create($request->all());
         return redirect()->route('subcategory.index')->with('success','Successfully Sub categories added');
    }
    public function edit($subcategories){
            $subcategories=SubCategory::find($subcategories);
            if(!$subcategories){
                return redirect()->route('subcategory.index')->with('error', 'Subcategory not found');
            }
        $categories = Categorie::all(); // Fetch all categories
            return view('subCategory.edit',compact('subcategories','categories'));





    }
    public function update(SubCategory $subcategories ,SubCategoryRequest $request){
               $subcategories->update($request->all());
        return redirect()->route('subcategory.index')->with('success','Successfully Sub categories updated');
    }
    public function delete(SubCategory $subcategories){
      $subcategories->delete();
        return redirect()->route('subcategory.index')->with('error','Successfully Sub categories deleted');

    }
    public function duplicate(SubCategory $subcategories){
             $subcategories=$subcategories->replicate();
             $subcategories->save();
             return redirect()->back();
    }
}

