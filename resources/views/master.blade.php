<!DOCTYPE html>
<html>
<head>
	
	<title>Rekta</title>
	{!! Html::style('lib/bootstrap/dist/css/bootstrap.min.css') !!}
	@yield('override-css')
	
</head>
<body>

	@yield('content')
	
	@yield('modal')

	{{ HTML::script('lib/jquery/dist/jquery.min.js') }}
	{{ HTML::script('lib/bootstrap/dist/js/bootstrap.min.js') }}
	@yield('override-js')

</body>
</html>