<!DOCTYPE html>
<html>
<head>
<title>NewsFeed</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/li-scroller.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
@include('frontEnd.layout.header')
@include('frontEnd.layout.navArea')
@section('newsSection')
@include('frontEnd.layout.newsSection')
@show
@section('slider')
@include('frontEnd.layout.sliderSection')
@show
@yield('content')
<!--content>
@include('frontEnd.layout.contentSection')
<!content-->

@include('frontEnd.layout.footer')
  
<script src="{{ asset('js/jquery.min.js')}}"></script> 
<script src="{{ asset('js/wow.min.js')}}"></script> 
<script src="{{ asset('js/bootstrap.min.js')}}"></script> 
<script src="{{ asset('js/slick.min.js')}}"></script> 
<script src="{{ asset('js/jquery.li-scroller.1.0.js')}}"></script> 
<script src="{{ asset('js/jquery.newsTicker.min.js')}}"></script> 
<script src="{{ asset('js/jquery.fancybox.pack.js')}}"></script> 
<script src="{{ asset('js/custom.js')}}"></script>
</body>
</html>