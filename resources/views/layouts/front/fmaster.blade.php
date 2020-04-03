<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <!-- Bootstrap styles -->
    <link href="{{url('/')}}/assets/front/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="{{url('/')}}/assets/front/css/style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="{{url('/')}}/assets/front/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="{{url('/')}}/assets/front/css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>
<!--
	Upper Header Section
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="index.html"><span></span>
		<img src="{{url('/')}}/assets/front/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
	</a>
	</h1>
	</div>
	

</div>
</header>

<!--
Navigation Bar Section
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			 
			  @if (Auth::check())
			  <li class=""><a href="{{url('/')}}/user">{{Auth::user()->name}}</a></li>
			 @endif

			</ul>
			
			 @if (!Auth::check())
			<ul class="nav pull-right">


			<li class="dropdown">


				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm" method="post" action="{{url('/')}}/login">
				 @csrf
				  <div class="control-group">
					<input type="email" name="email" class="span2" id="inputEmail" placeholder="Email" required>
				  </div>
				  <div class="control-group">
					<input type="password" name="password" class="span2" id="inputPassword" placeholder="Password" required>
				  </div>
				  <div class="control-group">					
					<button type="submit" class="shopBtn btn-block">Login</button>
				  </div>
				</form>
				




				</div>
			</li>

			</ul>
			@endif
		  </div>
		</div>
	  </div>
	</div>
<!--
Body Section
-->
	<div class="row">
<!--
Side Bar
-->
@yield('fsidebar')

	<div class="span9">

<!--
Slider
-->
@yield('slider')

<!--
content -orta içerik alanı
-->
@yield('content')

<!--
Clients
-->
<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">
		<div class="span2">
			<a href="#"><img alt="" src="{{url('/')}}/assets/front/img/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="{{url('/')}}/assets/front/img/2.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="{{url('/')}}/assets/front/img/3.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="{{url('/')}}/assets/front/img/4.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="{{url('/')}}/assets/front/img/5.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="{{url('/')}}/assets/front/img/6.png"></a>
		</div>
	</div>
</section>

<!--
Footer
-->

</div><!-- /container -->

<div class="copyright">
<div class="container">
	<p class="pull-right">
		<a href="#"><img src="{{url('/')}}/assets/front/img/maestro.png" alt="payment"></a>
		<a href="#"><img src="{{url('/')}}/assets/front/img/mc.png" alt="payment"></a>
		<a href="#"><img src="{{url('/')}}/assets/front/img/pp.png" alt="payment"></a>
		<a href="#"><img src="{{url('/')}}/assets/front/img/visa.png" alt="payment"></a>
		<a href="#"><img src="{{url('/')}}/assets/front/img/disc.png" alt="payment"></a>
	</p>
	<span>Copyright &copy; 2019-2020<br><a href="https://www.instagram.com/yariyolcu/?hl=tr">SKTech</a></span>
</div>
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{url('/')}}/assets/front/js/jquery.js"></script>
	<script src="{{url('/')}}/assets/front/js/bootstrap.min.js"></script>
	<script src="{{url('/')}}/assets/front/js/jquery.easing-1.3.min.js"></script>
    <script src="{{url('/')}}/assets/front/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="{{url('/')}}/assets/front/js/shop.js"></script>
  </body>
</html>
