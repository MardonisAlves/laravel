<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/estilos.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="{{ asset('/js/jquery-ui.css')}}">
    <script src="{{asset('/js/jquery-ui.js') }}"></script>
    <script src="{{asset('/js/jquery.js')}}"></script>
    <script src="{{asset('/js/bootstrap.js')}}"></script>

 
       

        <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@if(Auth::guest())
					<li><a href="{{ url('/') }}">Home</a></li>
					@else
                    <li><a href="{{ url('home') }}">Home</a></li>
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cadastros<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('Formproduto') }}">Novo Produto</a></li>
								<li><a href="{{ url('vendas') }}">Nova Venda</a></li>
								<li><a href="{{ url('cad_cliente') }}">Novo Cliente</a></li>
							</ul>
					</li>
					<li><a href="{{ url('responderEmail') }}">Email</a></li>
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Edit Categorias<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('Getvendas') }}">Minhas Vendas</a></li>
								<li><a href="{{ url('modulo/updateUploads') }}">Edit Uploads</a></li>
								<li><a href="{{ url('#') }}">Edit 2</a></li>
							</ul>
					</li>
				</ul>
				@endif
				<ul class="nav navbar-nav navbar-right">
					@if(Auth::user())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>


    <div class="row-fluid">
       
    </div>
        

	@yield('content')


</body>
</html>
