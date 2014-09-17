<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> @yield('Titulo') </title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/font-awesome.min.css') }}
		{{ HTML::style('css/ionicons.min.css') }}
		{{ HTML::style('css/morris/morris.css') }}
		{{ HTML::style('css/jvectormap/jquery-jvectormap-1.2.2.css') }}
		{{ HTML::style('css/datepicker/datepicker3.css') }}
		{{ HTML::style('css/daterangepicker/daterangepicker-bs3.css') }}
		{{ HTML::style('css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}
		{{ HTML::style('css/AdminLTE.css') }}
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        	{{ HTML::style('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
        	{{ HTML::style('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}
        <![endif]-->
	</head>
	<body class="skin-blue">
		@section('Contenido')
		<p> Mi Contenido es:  </p>
		@show
	</body>
</html>