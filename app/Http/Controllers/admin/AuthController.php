<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use PhpParser\Node\Expr\FuncCall;

class AuthController extends Controller
{
    public function login(){
    return view('front.logIn');
    }
    public function register(){
        return view('front.signUp');
    }
    public function store(RegisterRequest $request){
        $registerUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.login')->with('success' ,'user successful created');
    }

}
