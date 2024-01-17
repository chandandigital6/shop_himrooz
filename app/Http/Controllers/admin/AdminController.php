<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{

    public function index(){
        return view('front.logIn');
    }
    public function signup(){
        return view('front.signUp');
    }
    public function authenticate(Request $request){
         $validate=Validator::make($request->all(),[
             'email'=>'required|email',
             'password'=>'required'
         ]);
         if ($validate->passes()){
              if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->get('remember'))){
                 $admin=Auth::guard('admin')->user();
                 if($admin->role == 2){
                     return redirect()->route('admin.dashboard');
                 }else{
//                   Auth::guard('admin')->logout();
                     return redirect()->route('front.home');
//                     return  redirect()->route('admin.login')->with('error','you are not authoriesd to acssess admin panel');
//               return redirect()->back()->with('error','email or password incorrect');
                 }

              }else{
                  return  redirect()->route('login')->with('error','Either email or password is incorrect');
//                  return redirect()->back()->with('error','email or password incorrect');
              }
         }else{
             return redirect()->route('admin.login')
                 ->withErrors($validate)->withInput($request->only('email'));
         }
    }
}
