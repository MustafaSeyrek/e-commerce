@extends('layouts.front.fmaster')
@section('title','Sepetim')
@section('keywords','')

@section('sidebar')
   @include('front.usersidebar')
@endsection

@section('slider')
@endsection
@section('content')

<hr class="soften">
<div>
    <h4>Sepetimdeki Ürünler</h4>
</div>
<hr class="soften">
<div class row>
    <div class="span8">


        <table class="table table-bordered">          
    
            <tbody><tr>
              <th>id</th>          
              <th>Model</th>             
              <th>Price</th>
            </tr>
    
            <?php $total_cost=0;?>
            @foreach ($veriler as $urun)
            <tr>
              <td>{{ $urun->ID }}</td>
              <td>{{ $urun->Model }} </td>             
              <td>{{ $urun->Price }} ₺ </td>              
            </tr>
            <?php $total_cost=$total_cost + $urun->Price; ?>
            @endforeach

          </tbody></table>
          Sepet Toplamı: <?php echo $total_cost; ?>₺
         
            
          <form method="post" action="{{ url('/') }}/siparisi_tamamla">
            @csrf
            <input type="hidden" readonly name="total_cost" value="<?php echo $total_cost; ?>">
            <button type="submit" class="btn btn-success ">Siparişi Tamamla</button>
          </form>

          



    </div>
</div>

@endsection