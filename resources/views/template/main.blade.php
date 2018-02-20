<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Raiz') | DataBlog - &copy; <?php echo date('Y'); ?></title>
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>

	@include('template.partials.nav')


	@include('template.partials.footer')

	<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
	

</body>
</html>