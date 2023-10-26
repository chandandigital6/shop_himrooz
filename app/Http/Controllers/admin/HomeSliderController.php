<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeSliderRequest;
use App\Models\HomeSlider;

class HomeSliderController extends Controller
{
    public function create(){
        return view('slider.create');
    }
    public function store(HomeSliderRequest $request){
           $homeSLider=HomeSlider::create($request->all());
           $image
    }
}
