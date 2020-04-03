<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {


             if(Auth::attempt(['email'=>$request->email, 'password'=> $request->password,
             'role' => 'admin','active'=>'True'])){

                 return redirect('/admin');

             }else{

               return redirect('/admin/login')->with('message','Hatalı email ya da şifre!');
             }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/admin/login')->with('message','Çıkış Başarılı');

    }

    public function register_form()
    {
        return view('admin.register');
    }


    public function register_save(Request $request){
        DB::table('users')->insert([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' =>Hash::make($request->get('password')),
            'role' => $request->get('role'),
            'active' => $request->get('active')
        ]);
       
        return redirect('/admin/register')->with('message','Kayıt Başarılı');

    }

}
