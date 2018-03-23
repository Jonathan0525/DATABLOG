<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon//favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<title>@yield('title', 'Raiz') | DataBlog - &copy; <?php echo date('Y'); ?></title>
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
	<link rel="stylesheet" href="{{ asset('chosen/chosen.css') }}">
	<link rel="stylesheet" href="{{ asset('trumbowyg/ui/trumbowyg.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

	@include('template.partials.nav')


	<section>
		
	@yield('content')
	
	</section>


	@include('template.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script type="text/javascript" src="{{ asset('chosen/chosen.jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('trumbowyg/trumbowyg.js') }}"></script>

	

 <script>
$(document).ready(function(){
   
        $("#categorias_publicas").load("../template/partials/menu");

});

$(document).ready(function(){
   
        $("#categorias_privado").load("../template/partials/menu");

});
</script>

@yield('js')

</body>
</html>