<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;

class UrunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
       // $sql = 'select * from product';
      //  $urunler = DB::select($sql);
       // return view('admin.urun_listesi', ['urunler' => $urunler]);
      // $urunler=product::all();
       $sql="CALL `getProducts`()";
       $urunler = DB::select($sql);
       return view('admin.urun_listesi', ['urunler' => $urunler]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   //ekleme formu        
        return view('admin.urun_ekleme_formu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ekleme formundan gelenleri kaydetme
        $request->validate([
           'model' => 'required',
           'RAM' => 'required',
           'hafiza' => 'required',
           'cozunurluk' => 'required',
           'ekranBoyutu' => 'required',
           'islemci' => 'required',
           'fiyat' => 'required|numeric'
       ]);
        $product = new product([
           'Model' => $request->get('model'),
           'RAM' => $request->get('RAM'),
           'Memory' => $request->get('hafiza'),
           'Resolution' => $request->get('cozunurluk'),
           'ScreenSize' => $request->get('ekranBoyutu'),
           'ProcessorBrand' => $request->get('islemci'),
           'Price' => $request->get('fiyat')
       ]);
        $product->save();

        return redirect('admin/urunler')->with('success', 'Ürün Kaydedildi');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //tek veri gösterme
        echo 'gösterme '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //düzenleme formunu gösterme
        $product = product::find($id);
        return view('admin.urun_duzenleme_formu',compact('product'));

       // return view('admin.urun_duzenleme_formu', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //düzenlemeden gelenleri veritabanına update yapma
        $request->validate([
            'model' => 'required',
            'RAM' => 'required',
            'hafiza' => 'required',
            'cozunurluk' => 'required',
            'ekranBoyutu' => 'required',
            'islemci' => 'required',
            'fiyat' => 'required|numeric'
        ]);
        /*$product=product::find($id);
        $product->Model = $request->get('model');
        $product->RAM = $request->get('RAM');
        $product->Memory = $request->get('hafiza');
        $product->Resolution = $request->get('cozunurluk');
        $product->ScreenSize = $request->get('ekranBoyutu');
        $product->ProcessorBrand = $request->get('islemci');
        $product->Price = $request->get('fiyat');
        $product->save();*/
        product::where('ID',$id)->
                update(['Model' => $request->get('model'),
                'RAM' => $request->get('RAM'),
                'Memory' => $request->get('hafiza'),
                'Resolution' => $request->get('cozunurluk'),
                'ScreenSize' => $request->get('ekranBoyutu'),
                'ProcessorBrand' => $request->get('islemci'),
                'Price' => $request->get('fiyat')
                ]);

        return redirect('admin/urunler')->with('success', 'Güncelleme Yapıldı');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //silme
       // $product=product::find($id);
       // $product->delete();
        DB::select("delete from product where ID = ?", [$id]);
        return redirect('admin/urunler')->with('success', 'Silme Başarılı');
   
    }
}
