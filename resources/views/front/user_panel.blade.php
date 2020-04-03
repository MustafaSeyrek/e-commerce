@extends('layouts.front.fmaster')
@section('title','User Panel')
@section('keywords','')

@section('sidebar')
   @include('front.usersidebar')
@endsection

@section('content')
@if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
        @endif
<ul class="breadcrumb">
    <li><a href="{{url('/')}}">Anasayfa</a> <span class="divider">/</span></li>
    <li><a href="{{url('/user')}}">User</a> <span class="divider">/</span></li>    
    <li><a href="{{url('/')}}/sepetim"><span class="icon-chevron-right"></span>Sepetim</a></li>           
    <li><a href="{{url('/')}}/logout{{Auth::user()->ID}}"><span class="icon-chevron-right"></span>Logout</a></li>
           
</ul>
<div class="row">
    <div class="span4">
			<div class="well">			   
                Sayın {{Auth::user()->name}} Kullanıcı Sayfasına Hoşgeldiniz.				
		    </div>
	</div>
</div>      
        
@endsection