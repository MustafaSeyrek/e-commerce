@extends('layouts.front.fmaster')
@section('title','Siparisi Tamamla')
@section('keywords','')

@section('sidebar')
   @include('front.usersidebar')
@endsection

@section('slider')
@endsection
@section('content')


<hr class="soften">
<div>
    <h4>Siparişi Tamamla</h4>
</div>
<hr class="soften">
<div class row>
    <div class="span8">


         


          <form method="post" action="{{ url('/') }}/satın_al">
            @csrf
           Siparis Tutarı: <input type="hidden" name="total_cost" value="<?php echo $total_cost; ?>">
           <h4>KARGO BİLGİLERİ</h4><br>
           Adı Soyadı:<input readonly name="adsoy" value="{{ Auth::user()->name }}"<br><br><br>           
           Adres:<input type="text" name="address" <br> <br><br>
           Kredi Kartı Numarası:<input type="text" name="cardInfo" <br><br>
           <button type="submit" class="btn btn-success ">Satın Al</button>
          </form>

    </div>
</div>

@endsection