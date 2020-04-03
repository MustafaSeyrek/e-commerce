@extends('layouts.front.fmaster')
@section('title','user login')
@section('keywords','')


@section('content')
<ul class="breadcrumb">
    <li><a href="{{url('/')}}">Anasayfa</a> <span class="divider">/</span></li>
    <li><a href="{{url('/user')}}">User</a> <span class="divider">/</span></li>
    </ul>
<div class="row">
    <div class="span4">
		<div class="well">
            @if(\Session::has('message'))
            <div class="alert alert-error">
                <p>{{ \Session::get('message') }}</p>
            </div>
            @endif
			<h5>Login Form</h5>
				<form class="form-horizontal loginFrm" method="post" action="{{url('/')}}/login">
				@csrf
                  <div class="control-group">
					<input type="email" name="email"  id="inputEmail" placeholder="Email" required>
				  </div>
				  <div class="control-group">
					<input type="password" name="password"  id="inputPassword" placeholder="Password" required>
				  </div>
				  <div class="control-group">
					
					<button type="submit" class="shopBtn btn-block">Login</button>
				  </div>
			</form>
		
		
        </div>
    </div>
</div>
        
@endsection