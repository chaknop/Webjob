<!DOCTYPE html>
<html>
<head> 
	<title>@yield('title')</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/_all-skins.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/AdminLTE.min.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/font-awesome.min.css') }}">	

	<link rel="stylesheet" type="text/css" href="{{ asset('css/datepicker.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/ionicons.min.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/jquery-jvectormap.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/admin.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/blue.css') }}">
	
	
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/jquery.dataTables.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/dataTables.bootstrap.min.css') }}">


	<script type="text/javascript" src="{{ asset('js/lib/jquery-3.2.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/raphael.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/morris.min.js') }}"></script>	
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery.sparkline.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery.knob.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/lib/color.animate.min.js') }}"></script> 
	<script type="text/javascript" src="{{ asset('js/lib/datepicker.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery.slimscroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/fastclick.js') }}"></script> 
	
	
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/adminlte.min.js') }}"></script>

	<!-- <script type="text/javascript" src="{{ asset('adminlte/js/lib/dashboard.js') }}"></script> -->
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/demo.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/js/admin.js') }}"></script>	
	<script type="text/javascript" src="{{ asset('adminlte/js/insertData.js') }}"></script>	
	<script type="text/javascript" src="{{ asset('adminlte/js/retreiveData.js') }}"></script>	


</head>
<body>
	@yield('content')
</body>
</html>