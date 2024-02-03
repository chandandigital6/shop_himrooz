<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Testing\Fluent\Concerns\Has;
use MongoDB\Driver\Session;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Http\Request;

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
        return redirect()->route('login')->with('success' ,'Account created successfully');
    }

    public function forgetPasswordPage(){
        $otpSend = false;
        return view('front.forgetPassword')->with('otpSend',$otpSend);
    }


    public function sendVerificationCode(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user){
            $userName = $user->name;
            $userEmail = $user->email;
            $otp = rand(100000,999999);
            $otpSend = true;
            session()->put('randomNumber',$otp);
            session()->put('userEmail',$userEmail);
            Mail::send('front.forgetPasswordMail', ['userName' => $userName, 'userEmail' => $userEmail, 'otp'=>$otp] , function ($message) use ($userEmail) {
                $message->to($userEmail);
                $message->subject('Reset Your Password');
            });
            session()->flash('success','OTP sent to your email');
            return view('front.forgetPassword')->with('otpSend',$otpSend)->with('userEmail',$userEmail);
        }else{
            $otpSend = false;
            session()->flash('error','Sorry this email not found');
            return view('front.forgetPassword')->with('otpSend',$otpSend);
        }
    }


    public function verifyCode(Request $request){
        $userEmail = session()->get('userEmail');
        $userOtp = $request->otp;
        $randomNumber = session()->get('randomNumber');

        if($userOtp == $randomNumber){
            session()->forget('randomNumber');
            session()->flash('success','OTP verified');
            return view('front.changePassword')->with('userEmail',$userEmail);
        }else{
            session()->forget('randomNumber');
            $otpSend = false;
            session()->flash('error','OTP is not correct');
            return view('front.forgetPassword')->with('otpSend',$otpSend);
        }
    }


    public function changePassword(Request $request){
        $userEmail = session()->get('userEmail');
        $password = $request->new_password;
        $confirmPassword = $request->confirm_new_password;
        if($password != $confirmPassword){
            session()->flash('error','Password and confirm password not matched');
            return view('front.changePassword')->with('userEmail',$userEmail);
        }
        $userEmail = session()->get('userEmail');
        $user = User::where('email',$userEmail)->first();
        $user->password = Hash::make($password);
        $user->save();
        session()->forget('userEmail');
        session()->flash('success','Password changed successfully');
        return redirect()->route('login');
    }

      public function updateAccountSetting(Request $request){
        $this->validate($request, [
            'name' => 'required',
        ]);
        $user = Auth::guard('admin')->user();
        $user->name = $request->name;
        if($request->password != null){
            // first check if password and confirm password matched
            if($request->password != $request->confirm_password){
                session()->flash('error','Password and Confirm Password not matched');
                return redirect()->back();
            }
            else{
                $user->password = Hash::make($request->password);
            }
        }
          $user->save();
          session()->flash('success','Account Settings changed successfully');
        return redirect()->back();



      }

}
