@extends('layouts.admin.amaster')

@section('title','Ürünler Ekleme Sayfası')

@section('keywords','')

@section('content')

 <!-- Content Header (Page header) -->
 <section class="content-header">
   <h1>
     Ürün Ekleme
   </h1>
   <ol class="breadcrumb">
     <li><a href="{{ url('/') }}/admin"><i class="fa fa-dashboard"></i> Home</a></li>
     <li><a href="#">Ürün Ekleme</a></li>
   </ol>
 </section>

 <div class="box box-primary">
    <div class="box-header">
    </div><!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ url('/') }}/admin/urun/save" method="POST">
     @csrf
        <div class="box-body">       
          <div class="form-group">
            <label class="control-label col-sm-2">Model:</label>
            <div class="col-sm-10">
              <input type="text" name="model" class="form-control" id="modelID" placeholder="">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2">RAM:</label>
            <div class="col-sm-10">
              <input type="text" name="RAM" class="form-control" id="RAM_ID" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Hafıza:</label>
            <div class="col-sm-10">
              <input type="text" name="hafiza" class="form-control" id="hafizaID" placeholder="">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2">Çözünürlük:</label>
            <div class="col-sm-10">
              <input type="text" name="cozunurluk" class="form-control" id="cozunurlukID" placeholder="">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2">Ekran Boyutu:</label>
            <div class="col-sm-10">
              <input type="text" name="ekranBoyutu" class="form-control" id="ekranBoyutuID" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">İşlemci Markası:</label>
            <div class="col-sm-10">
              <input type="text" name="islemci" class="form-control" id="islemciID" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Fiyat:</label>
            <div class="col-sm-10">
              <input type="number" name="fiyat" class="form-control" id="fiyatID" placeholder="">
            </div>
          </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">             
              <button type="submit" class="btn btn-info pull-right">Kaydet</button>
            </div>
          </div>
  </div>
@endsection
