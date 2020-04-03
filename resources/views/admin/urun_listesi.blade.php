
@extends('layouts.admin.amaster')

@section('title','Ürünler Listesi')

@section('keywords','')

@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
   <h1>
     Ürün Listesi
   </h1>

   <ol class="breadcrumb">
     <li><a href="{{ url('/') }}/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>     
   </ol>
 </section>

<div class="box">
    <div class="box-header">
    </div><!-- /.box-header -->
    <div class="box-body">
      <table class="table table-bordered">
        <a href="{{ url('/') }}/admin/urun/ekle"  class="btn btn-success btn-flat ">Ürün Ekle</a>

        <tbody><tr>
          <th >id</th>          
          <th>Model</th>
          <th>RAM</th>
          <th>Hafıza</th>
          <th>Çözünürlük</th>
          <th>Ekran Boyutu</th>
          <th>İşlemci Markası</th>
          <th>Fiyat</th>
          <th>Düzenle</th>
          <th>Sil</th>
        </tr>


        @foreach ($urunler as $urun)
        <tr>
          <td>{{ $urun->ID }}</td>
          <td>{{ $urun->Model }} </td>
          <td>{{ $urun->RAM }} </td>
          <td>{{ $urun->Memory }} </td>
          <td>{{ $urun->Resolution }} </td>
          <td>{{ $urun->ScreenSize }} </td>
          <td>{{ $urun->ProcessorBrand }} </td>
          <td>{{ $urun->Price }} ₺ </td>
          <td>
            <a href="{{ url('/') }}/admin/urun/edit/{{ $urun->ID }}"  class="btn btn-block btn-primary btn-xs ">Düzenle</a>
          </td>
          <td>
            <a href="{{ url('/') }}/admin/urun/destroy/{{ $urun->ID }}" class="btn btn-block btn-danger btn-xs " onclick="return confirm('Silmek istediğinden emin misin?')">Sil</a>
          </td>
        </tr>
        @endforeach
      </tbody></table>
    </div><!-- /.box-body -->

  @endsection
