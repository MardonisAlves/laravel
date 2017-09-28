<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Somos uma empresa de desenvolvimento de sistemas com framework laravel">
  <meta name="keywords" content="websites laravel, sistemas web, seomaster,programação web">
  <meta name="author" content="Mardonis Alves Bezerra">
  <meta name="email" content="mardonisgp@gmail.com">
  <meta name="Charset" content="UTF-8">
  <meta name="Rating" content="General">
  <meta name="Distribution" content="Global">
  <meta name="Robots" content="INDEX,FOLLOW">
  <meta name="Revisit-after" content="1 Day">


  <title>Laravel</title>

  <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/estilos.css') }}" rel="stylesheet">
  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  



</head>
<body>
  <nav id="nav" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand active" href="/"><img src="{{asset('/img/House.png')}}"></a>
      </div>

      <div   class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       
        <ul class="nav navbar-nav navbar-left">
          <li><a href="{{ url('') }}">Home</a></li>
          <li><a href="{{ url('') }}">Serviços</a></li>
          <li><a href="{{ url('') }}">Templates</a></li>
          <li><a href="{{ url ('contato') }}">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

<!--caroucel-->
<div class="container pagina">


@yield('content')
<div class="row-fluid">
  <div class="col-md-12 footer">
    <div class="col-md-4">
        <h3>Sigam-me</h3>


 
    </div>
    <div class="col-md-4 footer">
       <h3>Nosso Contato</h3>
      <p class="text-center">
        E-mail:mardonis Alves</br>
        Telefone:989578193/33451756
      </p>
    </div>
     <div class="col-md-4 footer">
       <h3>Parceiros</h3>
      <p class="text-center">Texto a direita</p>
    </div>
</div>
</div>
</div>
</body>
</html>
