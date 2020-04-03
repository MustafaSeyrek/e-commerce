
@extends('layouts.admin.amaster')

@section('title','Ürünler Logları')

@section('keywords','')

@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
   <h1>
     Ürün Logları
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
        <tbody><tr>
          <th >id</th>
          <th>Model</th>
          <th>RAM</th>
          <th>Hafıza</th>
          <th>Çözünürlük</th>
          <th>Ekran Boyutu</th>
          <th>İşlemci Markası</th>
          <th>Fiyat</th>
          <th>Action</th>
          <th>Time</th>
        </tr>


        @foreach ($logs as $log)
        <tr>
          <td>{{ $log->id }}</td>
          <td>{{ $log->Model }} </td>
          <td>{{ $log->RAM }} </td>
          <td>{{ $log->Memory }} </td>
          <td>{{ $log->Resolution }} </td>
          <td>{{ $log->ScreenSize }} </td>
          <td>{{ $log->ProcessorBrand }} </td>
          <td>{{ $log->Price }} ₺ </td>
          <td>{{ $log->Action }}</td>
          <td>{{ $log->Time }}</td>

        </tr>
        @endforeach
      </tbody></table>
    </div><!-- /.box-body -->

  @endsection
