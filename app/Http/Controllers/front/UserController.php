<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{  
     public function  __construct(){
         $this->middleware('user');

    }

    public function index(){
        return view('front.user_panel');
    }

    public function sepete_ekle(Request $request){
       DB::table('carts')->insert([
           'Name'=>$request->Name,
           'Price'=>$request->Price,
           'FK_ProductID'=>$request->urunID,
           'FK_CustomerID'=>Auth::user()->id
       ]);
       
       return redirect('/user')->with('success','Sepete başarıyla eklendi.');
    }

    public function sepetim(Request $request){
        $veriler=DB::select('select p.* from product p, carts c  where p.ID =c.FK_ProductID and c.FK_CustomerID= ?', [Auth::user()->id]);
        return view('front.sepetim', compact('veriler'));

    }

    public function siparisi_tamamla(Request $request){
        if($request->isMethod('post'))
        {
        $user=DB::select('select * from users where id=?', [Auth::user()->id]);
        $total_cost=$request->total_cost;      
        
        return view('front.siparisi_tamamla', compact('user','total_cost'));
        }
       else{
        echo "post gelmedi.";
         }

    }

    public function satın_al(Request $request){
        return redirect('/user')->with('success','Satın Alma Gerçekleşti.');
    }

}
