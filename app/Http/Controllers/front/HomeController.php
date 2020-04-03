<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;
class HomeController extends Controller
{
    public function index(){

       $urunler=product::all();
       return view("front.home",compact('urunler'));
    }
}
