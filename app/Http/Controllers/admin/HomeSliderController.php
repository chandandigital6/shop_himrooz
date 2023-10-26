<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeSliderRequest;
use App\Models\HomeSlider;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{

    public function index(Request $request){
        $keyword = $request->input('keyword');
        $slider = HomeSlider::query();

        if (!empty($keyword)) {
            $slider->where('title', 'like', "%$keyword%");
        }

        $slider = $slider->paginate(5);
//        $slider=HomeSlider::all();
        return view('slider.index',compact('slider'));
    }
    public function create(){
        return view('slider.create');
    }
    public function store(HomeSliderRequest $request){
        $homeSlider=HomeSlider::create($request->all());
        $image = $request->file('image')->store('public/homeSlider');

        $homeSlider->image = str_replace('public/', '', $image);
        $homeSlider->save();
        return redirect()->route('slider.index')->with('success','slider created');
    }
    public function edit($slider){
        $slider=HomeSlider::find($slider);
        return view('slider.edit',compact('slider'));
    }
    public function update(Request $request, $id) {
        $slider = HomeSlider::find($id);

        if ($request->hasFile('image')) {
            $newImage = $request->file('image')->store('public/homeSlider');
            $slider->image = str_replace('public/', '', $newImage);
        }
        $slider->title = $request->input('title');
        $slider->save();
        return redirect()->route('slider.index')->with('success', 'Slider updated successfully');
    }
 public function delete(HomeSlider $slider){
         $slider->delete();
     return redirect()->route('slider.index')->with('error', 'Slider deleted successfully');

 }
 public function duplicate(HomeSlider $slider){
        $newSlider=$slider->replicate();
        $newSlider->save();
     return redirect()->route('slider.index')->with('success', 'Slider duplicate successfully');

 }
}
