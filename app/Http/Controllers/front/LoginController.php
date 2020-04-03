<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function login_form(){
      return view('front.login');
   }

   public function login(Request $request){
     if($request->isMethod('post')){
        if(Auth::attempt(['email'=>$request->email, 'password'=> $request->password,
        'role' => 'user','active'=>'True'])){
            return redirect('/user');

        }else{
            return redirect('/login')->with('message','Hatalı email ya da şifre!');
        }
     }

   }


   public function logout(){
    Auth::logout();
    return redirect('/');
   }



}
