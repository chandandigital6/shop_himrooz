<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategorieRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
//    public function index(Request $request){
//
//        $category=Categorie::all();
//       return view('categorie.list',compact('category'));
//    }
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $categories = Categorie::query();

        if (!empty($keyword)) {
            $categories->where('name', 'like', "%$keyword%");
        }

        $categories = $categories->paginate(5);
        return view('categorie.list', compact('categories'));
    }

    public function create(){
       return view('categorie.create');
    }
    public function store(CategorieRequest $request){
//        dd($request);
          $category=Categorie::create($request->all());

           $image = $request->file('image')->store('public/categoriesPhoto');

           $category->image = str_replace('public/', '', $image);
          $category->save();
          return redirect()->route('categorie.index')->with('success','Successfully categories added');


    }
    public function edit($categories){
          $categories=Categorie::find($categories);
          return view('categorie.edit',compact('categories'));
    }
    public function update(Categorie $categories ,CategorieRequest $request){
//        dd($request->all());
            $categories->update($request->all());
        $request->hasFile('image') ? $categories->update(['image' => str_replace('public/', '', $request->file('image')->store('public/categoriesPhoto'))]) : '';
//        $categories->save();
       return redirect()->route('categorie.index')->with('success', 'Successfully Updated');
    }
    public function delete(Categorie $categories){
        $categories->delete();
        return redirect()->route('categorie.index')->with('error', 'Successfully deleted');

    }
    public function duplicateItem(Categorie $category){
//        $newCategory = new Categorie();
        $newCategory = $category->replicate();
        $newCategory->save();
        return redirect()->back();
    }
}

