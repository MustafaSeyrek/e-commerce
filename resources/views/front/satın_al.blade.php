@extends('layouts.front.fmaster')
@section('title','Siparisi Tamamla')
@section('keywords','')

@section('sidebar')
   @include('front.usersidebar')
@endsection

@section('slider')
@endsection
@section('content')
@if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
@endif