<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index(Request $request){
        $keyword = $request->input('keyword');
        $brand = Brand::query();

        if (!empty($keyword)) {
            $brand->where('name', 'like', "%$keyword%");
        }

        $brand = $brand->paginate(5);
        return view('brand.index', compact('brand'));

    }
    public function create(){
        return view('brand.create');
    }
    public function store(BrandRequest $request){
         $brand=Brand::create($request->all());
       return redirect()->route('brand.index')->with('success','Brand Successfully created');
    }
    public function edit($brandId){
        $brandId =Brand::find($brandId);
        return view('brand.edit',compact('brandId'));
    }
    public function Brandupdate(Brand $branId , BrandRequest $request){
        dd($request);
        $branId->update($request->all());
          return redirect()->route('brand.index')->with('success','Successfully Updated');
    }

    public function delete(Brand $brandId){
        $brandId->delete();
        return redirect()->route('brand.index')->with('error','Brand Successfully delete');

    }
}
