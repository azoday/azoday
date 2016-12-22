<!DOCTYPE html>
<html>
	<head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>@yield('title')</title>
      <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{URL::asset('css/icons.css')}}" rel="stylesheet" type="text/css">
      <link href="{{URL::asset('css/animate.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{URL::asset('css/animsition.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{URL::asset('css/owl/owl.carousel.css')}}" rel="stylesheet" type="text/css">
      <!-- Theme styles -->
      <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      @yield('head')
   </head>
	<body>
		<div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
			@yield('header')
		
		
			@yield('content')
		
			
			@yield('footer')
		</div>
	 	<script src="{{URL::asset('js/jquery.min.js')}}"></script>
      	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
     	<script src="{{URL::asset('js/animsition.min.js')}}"></script>
      	<script src="{{URL::asset('js/owl/owl.carousel.min.js')}}"></script>
     	<!-- Kupon js -->
      	<script src="{{URL::asset('js/kupon.js')}}"></script>
	</body>
</html>